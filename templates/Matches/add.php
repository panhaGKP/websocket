<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Match $match
 * @var array $teams
 * @var int $randomRoomCode
 */
debug($teams);
?>
<div class="">

    <div class="column-responsive column-80">
        <div class="matches form content">
            <?= $this->Form->create($match) ?>
            <fieldset>
                <legend class="fs-1"><?= __('Create new Match') ?></legend>
                <label class="fs-2 mt-4">Set The Match</label>
                <div class="d-flex mt-3">
                    <div class="d-flex align-content-center parent_div">
                        <div>
                            <?php echo $this->Form->control('bleu_team_id',['label'=>false,'class'=>'','options'=>$teams]); ?>
                        </div>
                        <div class="bleu_label"></div>
                    </div>
                    <div class="mx-5 text-center justify-content-center align-content-center mt-2">
                        VS
                    </div>
                    <div class="d-flex align-content-center parent_div">
                        <div class="red_label"></div>
                        <div>
                            <?php echo $this->Form->control('red_team_id',['label'=>false,'class'=>'','options'=>$teams]); ?>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <?php
                    echo $this->Form->control('timer',[
                        'label'=>[
                            'text'=>'Set the time (minute)',
                            'class'=>'fs-2 mt-3'
                        ],
                        'class'=>['w-50 text-center shadow-sm'],
                        'default'=>3
                    ]);
                    ?>
                </div>
                <label class="fs-2 mt-3">Room Code</label>
                <div class="d-flex align-items-center">
                    <?php
                    echo $this->Form->control('room_code',['label'=>false,'value'=>$randomRoomCode,'class'=>'text-center shadow-sm']);
                    ?>
                    <div class="ms-2"><a href="#" id="room_code">Copy</a></div>
                </div>
            </fieldset>
            <?= $this->Form->button(__('Create'),['class'=>'btn btn-primary mt-3']) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<script>
    $(document).ready(function (){
        $('#room_code').on('click',function (){
            let input = $('#room-code').val()
            navigator.clipboard.writeText(input)
                .then(()=>{
                    console.log('Text copy to clipboard')
                })
                .catch((error)=>{
                    console.error('Fail to copy, error: ', error)
                });
        })
    })
</script>
