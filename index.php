<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--============================= Jquery =============================-->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <!--============================= Animate CSS =============================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">

    <!--============================= Izitoast =============================-->
    <link rel='stylesheet prefetch' href='https://unpkg.com/izitoast/dist/css/iziToast.min.css'>
    <script src='https://unpkg.com/izitoast/dist/js/iziToast.min.js'></script>

    <!--============================= Md bootstrap CSS =============================-->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.11.0/css/mdb.min.css" rel="stylesheet">

    <!--============================= CSS =============================-->
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>


    <div style="height: 100vh">
        <div class="flex-center flex-column">
            <img class="animated fadeIn delay-1s mb-4" style="width: 15%" src="images/any.png" alt="">
            <h5 class="animated zoomIn delay-2s mb-3" style="font-size:30px;">Gestionnaire de fichiers.</h5>
            <p class="animated fadeIn delay-3s"> © 2020 Equipe: <span class=" text-muted"> Team </span> </p>

            <form action="" method="post" id="mot_de_passe" class="form-inline mt-1-half mt-5 animated fadeIn delay-4s">
                <div class="md-form form-sm">
                    <!-- <i class="fas fa-desktop prefix active"></i> -->
                    <i class="fas fa-key prefix active red-text"></i>
                    <input type="text" id="name_folder" class="form-control">
                    <label for="name_doc" class="active ml-5 red-text">Mot de passe</label>
                </div>

                <div class="text-center">
                    <a href="index2.php" type="submit" onclick="" class="btn btn-danger mb-2 waves-effect waves-light"> <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </form>
        </div>
    </div>


    <script src="script.js"></script>
    <!-- <script src="iziToast/izitoast.js"></script> -->

    <!--============================= Md bootstrap JS =============================-->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
    </script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.11.0/js/mdb.min.js">
    </script>
</body>

</html>