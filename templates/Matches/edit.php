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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $match->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $match->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Matches'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="matches form content">
            <?= $this->Form->create($match) ?>
            <fieldset>
                <legend><?= __('Edit Match') ?></legend>
                <?php
                    echo $this->Form->control('room_code');
                    echo $this->Form->control('bleu_team_id');
                    echo $this->Form->control('bleu_team_name');
                    echo $this->Form->control('bleu_team_score');
                    echo $this->Form->control('red_team_id');
                    echo $this->Form->control('red_team_name');
                    echo $this->Form->control('red_team_score');
                    echo $this->Form->control('timer');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
