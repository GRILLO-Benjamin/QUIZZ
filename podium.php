<?php
include './navbar.php';
?>
<link rel="stylesheet" href="js/css/podium.css">

<body>
    
    <div class="scoreboard">
      <div class="scoreboard__podiums">
        <div class="scoreboard__podium js-podium" data-height="200px">
          <div class="scoreboard__podium-base scoreboard__podium-base--second">
            <div class="scoreboard__podium-rank">2</div>
          </div>
           <div class="scoreboard__podium-number">
               Vendela
             <small><span class="js-podium-data">359</span></small>
          </div>
        
        </div>
        <div class="scoreboard__podium js-podium" data-height="250px">
           <div class="scoreboard__podium-base scoreboard__podium-base--first">
            <div class="scoreboard__podium-rank">1</div>
            
          </div>
            <div class="scoreboard__podium-number">
               Wenghuset
              <small><span class="js-podium-data">359</span></small>
          </div>
        </div>
        <div class="scoreboard__podium js-podium" data-height="150px">
           <div class="scoreboard__podium-base scoreboard__podium-base--third">
               <div class="scoreboard__podium-rank">3</div>
          </div>
            <div class="scoreboard__podium-number">
              Cable Com
              <small><span class="js-podium-data">359</span></small>
          </div>
        </div>
      </div>
      <ol class="scoreboard__items" id="scoreboard__items" start="4">
      <li class="scoreboard__item" data-count="0">
        <div class="scoreboard__title">Helena Cosmetics</div>
        <div class="scoreboard__status">
          <div class="js-oneup">epost@epost.com</div>
        </div>
          <div class="scoreboard__numbers">
           <span class="js-number"></span>
        </div>
          <div class="scoreboard__bar js-bar">
      <div class="scoreboard__bar-bar"></div>
      </div>
      </li>
      <li class="scoreboard__item" data-count="0">
        <div class="scoreboard__title">Wenghuset</div>
         <div class="scoreboard__status">
          epost@epost.com
        </div>
          <div class="scoreboard__numbers">
          <span class="js-number"></span>
        </div>
        <div class="scoreboard__bar js-bar">
      <div class="scoreboard__bar-bar"></div>
      </div>
      </li>
      <li class="scoreboard__item" data-count="0">    
        <div class="scoreboard__title">Cable Com</div>
         <div class="scoreboard__status">
          epost@epost.com
        </div>
          <div class="scoreboard__numbers">
           <span class="js-number"></span>
        </div>
        <div class="scoreboard__bar js-bar">
      <div class="scoreboard__bar-bar"></div>
      </div>
      </li>  
      <li class="scoreboard__item">
        <div class="scoreboard__title">Allegro</div>
         <div class="scoreboard__status">
          epost@epost.com
        </div>
          <div class="scoreboard__numbers">
           <span class="js-number">0</span>
        </div>
         <div class="scoreboard__bar js-bar">
      <div class="scoreboard__bar-bar"></div>
      </div>
      </li>
      </div>
    </div>
    <audio src="http://themushroomkingdom.net/sounds/wav/smb/smb_1-up.wav" class="js-oneup-audio oneup-audio">test</audio>
    
</body>

<script type="text/javascript" src="./js/podium.js"></script>


<?php
include './footer.php';
?>