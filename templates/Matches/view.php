<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Match $match
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Match'), ['action' => 'edit', $match->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Match'), ['action' => 'delete', $match->id], ['confirm' => __('Are you sure you want to delete # {0}?', $match->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Matches'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Match'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="matches view content">
            <h3><?= h($match->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Bleu Team Name') ?></th>
                    <td><?= h($match->bleu_team_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Red Team Name') ?></th>
                    <td><?= h($match->red_team_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($match->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Room Code') ?></th>
                    <td><?= $this->Number->format($match->room_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bleu Team Id') ?></th>
                    <td><?= $this->Number->format($match->bleu_team_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bleu Team Score') ?></th>
                    <td><?= $this->Number->format($match->bleu_team_score) ?></td>
                </tr>
                <tr>
                    <th><?= __('Red Team Id') ?></th>
                    <td><?= $this->Number->format($match->red_team_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Red Team Score') ?></th>
                    <td><?= $this->Number->format($match->red_team_score) ?></td>
                </tr>
                <tr>
                    <th><?= __('Timer') ?></th>
                    <td><?= $this->Number->format($match->timer) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($match->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($match->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
