<?php
include './navbar.php';
?>
<link rel="stylesheet" href="js/css/leaderboard.css">
<body>
    <div class="page_wrapper">
        <header class="head group">
            <div class="head_wrapper group">
                <div class="logo">
                    <h1>QUIZZ TIME SCORES</h1>
                </div>
            </div>
        </header>
        <div class="banner">
            <div class="wrapper">
                <div class="banner_content">
                    <div class="banner_wrapper">
                        <div class="container">
                            <h2 class="title"><img src="http://findicons.com/files/icons/2799/flat_icons/256/trophy.png">
                                LEADERBOARD</h2>
                            <ol id="board" class="leaderboard">

                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include './footer.php';
    ?>

</body>
</html>