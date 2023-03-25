<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Match> $matches
 */
?>
<div class="matches index content mt-5">

    <div class="d-flex justify-content-between">
        <h3><?= __('Matches') ?></h3>
        <?= $this->Html->link(__('Create new match'), ['action' => 'add'], ['class' => 'btn btn-primary shadow-sm']) ?>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr class="">
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th>Room Code</th>
                    <th>Bleu</th>
                    <th>Red</th>
                    <th>Timer</th>
                    <th><?= $this->Paginator->sort('created') ?></th>

                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($matches as $match): ?>
                <tr>
                    <td><?= $this->Number->format($match->id) ?></td>
                    <td><?= $this->Number->format($match->room_code) ?></td>
                    <td class="blue-text">
                        <?= h($match->bleu_team_name) ?>
                        <br>
                        <?= $this->Number->format($match->bleu_team_score) ?>
                    </td>
                    <td class="red-text">
                        <?= h($match->red_team_name) ?>
                        <br>
                        <?= $this->Number->format($match->red_team_score) ?>
                    </td>
                    <td><?= $this->Number->format($match->timer) ?></td>
                    <td><?= h($match->created) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Go to the match'), ['action' => 'matchRoom', $match->room_code],['class'=>'btn btn-purple']) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
