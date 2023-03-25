<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Matches Model
 *
 * @method \App\Model\Entity\Match newEmptyEntity()
 * @method \App\Model\Entity\Match newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Match[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Match get($primaryKey, $options = [])
 * @method \App\Model\Entity\Match findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Match patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Match[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Match|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Match saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Match[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Match[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Match[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Match[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MatchesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('matches');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('room_code')
            ->requirePresence('room_code', 'create')
            ->notEmptyString('room_code');

        $validator
            ->integer('bleu_team_id')
            ->requirePresence('bleu_team_id', 'create')
            ->notEmptyString('bleu_team_id');

        $validator
            ->scalar('bleu_team_name')
            ->maxLength('bleu_team_name', 255)
            ->allowEmptyString('bleu_team_name');

        $validator
            ->integer('bleu_team_score')
            ->notEmptyString('bleu_team_score');

        $validator
            ->integer('red_team_id')
            ->requirePresence('red_team_id', 'create')
            ->notEmptyString('red_team_id');

        $validator
            ->scalar('red_team_name')
            ->maxLength('red_team_name', 255)
            ->allowEmptyString('red_team_name');

        $validator
            ->integer('red_team_score')
            ->notEmptyString('red_team_score');

        $validator
            ->integer('timer')
            ->notEmptyString('timer');

        return $validator;
    }
}
