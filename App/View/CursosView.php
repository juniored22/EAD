<?php
namespace View;
/**
*
*/
class CursosView
{

  function __construct($data)
  {
    require URL_THEME.'/includes/header.php';
    $video = explode('?v=',$data[0]['move_course']);
    ?>

<style media="screen">
  .pontos_010718{

    box-shadow: 3px 6px 35px -7px black;
        border-radius: 50%;
        text-align: center;
        width: 100px;
        height: 100px;
        line-height: 2.6;
        font-size: 41px;
        position: fixed;
        bottom: 26px;
        background: #ffffff;
        right: 23px;
  }

  .pontos_010718 .text_010718{

    position: absolute;
    font-size: 16px;
    display: block;
    text-align: center;
    top: 58px;
    left: 37px;
  }

  .title_010718 {
    color: #ffffff;
    background: #b7443d;
    width: 93%;
  }
  .title_course_view{
    margin: 86px;
    text-align: center;
margin-top:197px;
  }

  .sale {
      position: absolute;
      left: 375px;
      margin: 36px 0;
  }

  iframe {
      border-radius: 24px;
      width: 53%;
      height: 581px;
      margin: 2px auto;
      box-shadow: 0px 26px 66px -22px black;
      max-width: 890px;
  }

  .prova {
      display: flex;
      flex-direction: column;
      width: 86%;
      margin: 55px auto;
      border-radius: 15px;
      box-shadow: -1px 18px 65px -25px black;
      max-width: 935px;
  }
</style>


      <h1 class="title_course_view"><?=$data[0]['title_course'];?></h1>


    <div class="curso">
      <img class="sale" src="https://br.udacity.com/assets/iridium/images/nanodegree-overview/shared/nd-hero-video/flag/default.svg" alt="">
      <!-- <iframe id="vm"  src="https://www.youtube.com/embed/<?=$video[1];?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> -->

      <div id="video-placeholder"></div>
      <script src="https://www.youtube.com/iframe_api"></script>



      <div style="margin: 33px auto;"></div>
      <div class="desc_010718">
        <p><?=$data[0]['description_course'];?></p>
      </div>
        <div style="margin: 33px auto;"></div>
      <form class="prova" action="index.html" method="post">



        <h2 style="text-align: center;">QUESTÕES</h2>

        <?= $data[0]['question_course'];?>
        <!-- <div class="question">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eius</p>
          <label data-valor="" for="">
            <input type="radio" name="q1" value="teste">
            teste
          </label>
          <label data-valor="certo" for="">
            <input class="radio" type="radio" name="q1" value="question 1">
            question 1
          </label>
          <label data-valor="" for="">
            <input type="radio" name="q1" value="question 2">
            question 2
          </label>
          <label data-valor="" for="">
            <input type="radio" name="q1" value="question 3">
            question 3
          </label>
        </div> -->


        <div class="question">
                <div style="margin: 33px auto;"></div>
          <button style="width: 109px; margin:0 auto;" type="button" class="btn btn-success responder" name="button">CONCLUIR</button>
        </div>
        <div class="pontos_010718">
          <span class="result_010718">0</span> <span class="text_010718">pontos</span>
        </div>
      </form>
    </div>

    <script type="text/javascript">


    var player;

    function onYouTubeIframeAPIReady() {
      player = new YT.Player('video-placeholder', {
        width: '100%',
        height: 400,
        videoId: '<?=$video[1];?>',
        playerVars: {
          color: 'white',
          // playlist: 'taJ60kskkns,FG0fTKAqZ5g'
        },
        events: {
          onReady: initialize
        }
      });
    }

    function initialize(){

        // Update the controls on load
        updateTimerDisplay();
        updateProgressBar();

        // Start interval to update elapsed time display and
        // the elapsed part of the progress bar every second.
        time_update_interval = setInterval(function () {
            updateTimerDisplay();
            updateProgressBar();
        }, 1000);

        // Clear any old interval.
        clearInterval(time_update_interval);

    }


    // QUESTION

    document.querySelector('.responder').addEventListener('click', ()=>{
      var e = document.querySelectorAll('label');
      var x = document.querySelectorAll('.radio');
      var c = 0;
        e.forEach(function(a){
          if(a.dataset.valor=='certo'){
            a.style.background = 'green'
          }
        })

        x.forEach(function(a){
          if(a.checked == true){
            c++;
            console.log(c);
            document.querySelector('.result_010718').innerHTML = c;
          }
        })
      });

    </script>
    <?php
    require URL_THEME.'/includes/footer.php';
  }
}

?>
