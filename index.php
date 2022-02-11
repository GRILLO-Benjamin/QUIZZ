<?php
include './header.php';
?>

 <body>
<img class="bg_image" src="./img/bg_image.jpg">
 <noscript>
      You need to enable JavaScript to run this app.
    </noscript>
    <div id="root"></div>

 <div class="start_btn"><button><i>JOUER</i></button></div>
 <div class="info_box">
        <div class="info-title"><span>Voici les Règles du Quizz</span></div>
        <div class="info-list">
            <div class="info">1. Vous avez <span>15 secondes</span> par question.</div>
            <div class="info">2. Une fois la réponse choisie vous ne pouvez plus en changer.</div>
            <div class="info">3. Vous ne pouvez plus selectionner de réponse une fois le temps écoulé.</div>
            <div class="info">4. Il ne vous est plus possible de quitter le Quizz une fois commencé.</div>
            <div class="info">5. Vos points seront équivalents au nombre de bonnes réponses.</div>
        </div>
        <div class="buttons">
            <button class="quit">Quitter</button>
            <button class="restart">Continuer</button>
        </div>
    </div>

    <div class="quiz_box">
        <header>
            <div class="title">Quizz time !!</div>
            <div class="timer">
                <div class="time_left_txt">Temps restant</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        
        <section>
            <div class="que_text">
              
            </div>
            <div class="option_list">
                
            </div>
        </section>

        
        <footer>
            <div class="total_que">
                
            </div>
            <button class="next_btn">Quizz suivant</button>
        </footer>
    </div>

   
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-award"></i>
        </div>
        <div class="complete_text">T'as terminé le Quizz!!!</div>
        <div class="score_text">
            
        </div>
        <div class="buttons">
            <button class="restart">Réessayer</button>
            <button class="quit">Quitter Quiz</button>
        </div>
    </div>
 </body>

<?php
include './footer.php';
?>






