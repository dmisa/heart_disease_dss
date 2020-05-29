<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DSS Assignment|Heart Disease</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/ce50b37cb7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="styles/app.css">
    <link rel="stylesheet" type="text/css" href="styles/phpstyle.css">
    <link rel="stylesheet" type="text/css" href="styles/background.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="index.html"><i class="fas fa-file-medical-alt"></i>  Heart Disease<span class="sr-only">(current)</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link" href="pages/form.html">Form</a>
        <a class="nav-item nav-link" href="pages/about.html">About</a>
      </div>
    </div>
  </nav>


<div class="container text-center">
<?php if($_POST["thal"]<=3){ ?>
    <?php if($_POST["chest"]<=3){ ?>
        <h1 class='absent text-dark titlos'>absent! <i class="far fa-laugh-wink"></i></h1>
        <h3 class='ipotitlos text-dark'>Our app predicts that you dont have  heart disease. Nice! (visit a doctor for more precise results!)
    <?php } else{ ?>
        <?php if ($_POST["nomv"]<=0){?>
            <h1 class='absent text-dark titlos'>absent! <i class="far fa-laugh-wink"></i></h1>
            <h3 class='ipotitlos text-dark'>Our app predicts that you dont have  heart disease. Nice! (visit a doctor for more precise results!)
        <?php } else{ ?>
            <h1 class='present text-dark titlos'>present! <i class="fas fa-clinic-medical"></i></h1>
            <h3 class='ipotitlos text-dark'>Our app predicts that you have heart disease. Please visit a doctor immediately!
        <?php }?>
    <?php } ?>
<?php } else{ ?>
    <?php if($_POST["nomv"]>0){ ?>
            <div class="bg-danger">
            <h1 class='present text-dark titlos'>present! <i class="fas fa-clinic-medical"></i></h1>
            <h3 class='ipotitlos text-dark'>Our app predicts that you have heart disease. Please visit a doctor immediately!
            </div>
    <?php } else{?>
        <?php if($_POST["eia"]<=0){ ?>
            <?php if($_POST["chest"]<=3){ ?>
                <h1 class='absent text-dark titlos'>absent! <i class="far fa-laugh-wink"></i></h1>
                <h3 class='ipotitlos text-dark'>Our app predicts that you dont have  heart disease. Nice! (visit a doctor for more precise results!)
            <?php } else{?>
                <?php if ($_POST["rer"]<=1){ ?>
                    <h1 class='absent text-dark titlos'>absent! <i class="far fa-laugh-wink"></i></h1>
                    <h3 class='ipotitlos text-dark'>Our application predicts that you dont have a heart disease. Nice! (visit a doctor for precise results!)
                <?php } else{ ?>
                    <h1 class='present text-dark titlos'>present! <i class="fas fa-clinic-medical"></i></h1>
                    <h3 class='ipotitlos text-dark'>Our app predicts that you have heart disease. Please visit a doctor immediately!
                <?php }?>
            <?php }?>
        <?php } else{ ?>
            <?php if($_POST["oldpeak"]>1.5){ ?>
                <h1 class='present text-dark titlos'>present! <i class="fas fa-clinic-medical"></i></h1>
                <h3 class='ipotitlos text-dark'>Our app predicts that you have heart disease. Please visit a doctor immediately!
            <?php } else{ ?>
                <?php if($_POST["chest"]<=3){ ?>
                    <h1 class='absent text-dark titlos'>absent! <i class="far fa-laugh-wink"></i></h1>
                    <h3 class='ipotitlos text-dark'>Our app predicts that you dont have  heart disease. Nice! (visit a doctor for more precise results!)
                <?php } else{ ?>
                    <?php if($_POST["rer"]<=1){ ?>
                        <h1 class='absent text-dark titlos'>absent! <i class="far fa-laugh-wink"></i></h1>
                        <h3 class='ipotitlos text-dark'>Our app predicts that you dont have  heart disease. Nice! (visit a doctor for more precise results!)
                    <?php } else{ ?>
                        <h1 class='present text-dark titlos'>present! <i class="fas fa-clinic-medical"></i></h1>
                        <h3 class='ipotitlos text-dark'>Our app predicts that you have heart disease. Please visit a doctor immediately!
                    <?php } ?>
                <?php } ?>
            <?php } ?>
        <?php } ?>
    <?php } ?>
<?php } ?>

<hr>
<a class="btn btn-dark btn-sm"  href="pages/form.html">Try Again</a>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>