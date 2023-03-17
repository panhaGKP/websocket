<?php
declare(strict_types=1);

namespace App\Controller;

use App\Model\Entity\Score;
use Cake\Datasource\Exception\RecordNotFoundException;
use GuzzleHttp\Exception\GuzzleException;
use Pusher\ApiErrorException;
use Pusher\Pusher;
use Pusher\PusherException;

/**
 * Scores Controller
 *
 * @property \App\Model\Table\ScoresTable $Scores
 * @method \App\Model\Entity\Score[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ScoresController extends AppController
{

    /**
     * @throws PusherException
     * @throws ApiErrorException
     * @throws GuzzleException
     */
    public function addScore()
    {
        $this->request->allowMethod(['ajax','post']);
        $this->viewBuilder()->setClassName('Json');

        $score = $this->Scores->find()->first();

        if (!$score) {
            throw new RecordNotFoundException("Score not found.");
        }
        /**
         * @var \App\Model\Entity\Score $score
         */
//        dd($score);
        $score->score += 1;
        $this->Scores->save($score);

        $pusher = new Pusher("1eaf2f48999ec6fdee2b", "21ded8796f09b6def143", "1553395", [
            "cluster" => "ap1",
            "useTLS" => true
        ]);

        $pusher->trigger("score", "update", [
            "score" => $score->score
        ]);

        $this->set(compact('score'));
        $this->set('_serialize', ['score']);
    }

    /**
     * @throws PusherException
     * @throws GuzzleException
     * @throws ApiErrorException
     */
    public function subtract()
    {
        $this->request->allowMethod(['ajax']);
        $this->viewBuilder()->setClassName('Json');

        $score = $this->Scores->find()->first();

        if (!$score) {
            throw new RecordNotFoundException("Score not found.");
        }
        /**
         * @var \App\Model\Entity\Score $score
         */
        $score->score -= 1;
        $this->Scores->save($score);

        $pusher = new Pusher("1eaf2f48999ec6fdee2b", "21ded8796f09b6def143", "1553395", [
            "cluster" => "ap1",
            "useTLS" => true
        ]);

        $pusher->trigger("score", "update", [
            "score" => $score->score
        ]);

        $this->set(compact('score'));
        $this->set('_serialize', ['score']);
    }
    public function websocket(){
        $score = $this->Scores->find()->first();

        if (!$score) {
            $score = new Score(['value' => 0]);
            $this->Scores->save($score);
        }
//        dd($score);

        $this->set(compact('score'));
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $scores = $this->paginate($this->Scores);

        $this->set(compact('scores'));
    }

    /**
     * View method
     *
     * @param string|null $id Score id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $score = $this->Scores->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('score'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $score = $this->Scores->newEmptyEntity();
        if ($this->request->is('post')) {
            $score = $this->Scores->patchEntity($score, $this->request->getData());
            if ($this->Scores->save($score)) {
                $this->Flash->success(__('The score has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The score could not be saved. Please, try again.'));
        }
        $this->set(compact('score'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Score id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $score = $this->Scores->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $score = $this->Scores->patchEntity($score, $this->request->getData());
            if ($this->Scores->save($score)) {
                $this->Flash->success(__('The score has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The score could not be saved. Please, try again.'));
        }
        $this->set(compact('score'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Score id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $score = $this->Scores->get($id);
        if ($this->Scores->delete($score)) {
            $this->Flash->success(__('The score has been deleted.'));
        } else {
            $this->Flash->error(__('The score could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
