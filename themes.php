<?php
include './header.php';
?>

<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="./js/css/login.css" rel="stylesheet">
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div id="first">
                    <div class="myform form">
                        <div class="logo mb-3">
                            <div class="col-md-12 text-center">
                                <h1>Selection des themes</h1>
                            </div>
                        </div>
                        <form action="../QUIZZ/test.php" method="POST" name="themes">
                            <div class="form-group">
                            <button type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm">THEME 1 : Mangas</button>     
                       </div>
                       <div class="form-group">
                            <button type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm">THEME 2 : WEB DEV</button>     
                       </div>
                       <div class="form-group">
                            <button type="submit" name="submit" class=" btn btn-block mybtn btn-primary tx-tfm">THEME 2 : Culture Générale</button>     
                       </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>


<?php
include './footer.php';
?>