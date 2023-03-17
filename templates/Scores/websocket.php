<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Score> $scores
 * @var \App\Model\Entity\Score $score
 */
?>

<!-- templates/Scores/index.php -->

<div id="score" style="background-color: white;" class="wraper">
    <div class="score_panel">
        <?= $this->Html->link('<i class="fas fa-expand"></i>', '#', ['id' => 'fullscreen-btn', 'escape' => false,'class'=>'fullscreen']) ?>
        <div class="score_content">
            Score: <span id="score-value"><?= $score->score ?></span>
        </div>
    </div>

    <div id="score-controls" style="" class="score_content">
        <button id="add-button" class="btn btn-primary">Add</button>
        <button id="subtract-button" class="btn btn-danger">Subtract</button>
    </div>
</div>

<?php
echo $this->Html->script(['pusher.min.js?t=' . time()]);
?>
<script>
    $(document).ready(function () {
        let scoreValue = $("#score-value");

        // Set up Pusher
        var pusher = new Pusher("1eaf2f48999ec6fdee2b", { //YOUR_APP_KEY
            cluster: "ap1", // YOUR_APP_CLUSTER
            encrypted: true
        });

        var channel = pusher.subscribe("score");
        channel.bind("update", function (data) {
            console.log('hello')
            console.log(data)
            scoreValue.text(data.score);
        });

        // Add button event
        $('#add-button').on('click',function (){
            let $parent = $('#score-value');
            let oldScoreValue = parseInt($parent.text());
            let newScore = oldScoreValue+1;
            $parent.text(newScore)
            $.ajax({
                url: "/scores/addScore",
                method: "post",
                dataType: "json"
            });
        })
        // Subtract button event
        $("#subtract-button").click(function () {
            let $parent = $('#score-value');
            let oldScoreValue = parseInt($parent.text());
            let newScore = oldScoreValue-1;
            $parent.text(newScore)
            $.ajax({
                url: "/scores/subtract",
                method: "post",
                dataType: "json"
            });
        });
        $('#fullscreen-btn').on('click',function() {
            var score = document.getElementById("score");
            if (!document.fullscreenElement) {
                score.requestFullscreen();
            } else {
                if (document.exitFullscreen) {
                    document.exitFullscreen();
                }
            }
        });
        var timeoutID;

        /*function showScoreControls() {
            $('#score-controls').show();
            clearTimeout(timeoutID);
        }*/

       /* function hideScoreControls() {
            timeoutID = setTimeout(function() {
                $('#score-controls').hide();
            }, 3000);
        }*/

        // $('#score').mousemove(function() {
        //     showScoreControls();
        // });

        /*$('body').mousemove(function() {
            hideScoreControls();
        });*/

        // showScoreControls();
    });
</script>



