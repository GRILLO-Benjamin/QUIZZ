<?php
include './header.php';
?>
<?php
//connexion bdd 
try {
    $bdd = new PDO('mysql:host=141.94.22.233;dbname=Quizz;charset=utf8', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (\Throwable $th) {
    die('erreur db');
}
// recuperation de toutes les donnees de la table questions

$questions = $bdd->query('SELECT * FROM questions WHERE theme_id = 2 ORDER BY RAND() LIMIT 1');
$answers = $bdd->query('SELECT * FROM answers WHERE question_id > 20 and question_id <= 40');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="./js/css/login.css" rel="stylesheet">
    <title>test</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div id="first">
                    <div class="myform form">
                        <div class="logo mb-3">
                            <div class="col-md-12 text-center">
                                <h1>questions</h1>
                            </div>
                        </div>
                        <form action="../QUIZZ/webdev.php" method="POST" name="questions">
                            <div class="form-group" style="font-size:2vw;">
                                <ul>
                                    <?php while ($q = $questions->fetch()) { ?>
                                        <li><?= $q['id'] ?> : <?= $q['question_content'] ?></li>
                                        <br>
                                        <ul>
                                            <?php while ($r = $answers->fetch()) {
                                                if ($q['id'] == $r['question_id']) { ?>
                                                    <div class="col-md-12">
                                                        <button type="button" name="question" class="btn mybtn btn-primary "><?= $r['answer_content'] ?></button>
                                                    </div>
                                            <?php }
                                            } ?>
                                        </ul>
                                        <br>
                                        <div class="col-md-12">
                                            <button type="submit" name="submit" onclick="" class=" btn btn-block mybtn btn-primary tx-tfm">Continuer</button>
                                        <?php } ?>
                                        </div>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="http://php-project.loc/QUIZZ/js/test.js"></script>
</body>

</html>


<?php
include './footer.php';
?>