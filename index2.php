<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
</head>

<body>

    <?php
    include_once('./modals/modal.php');
    ?>


    <div id="overlayer"></div>
    <span class="loader">
    </span>

    <div class="row">
        <div class="col-sm-12">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="container">
                            <p id="response"></p>
                        </div>
                    </div>
                    <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <button type="button " onclick="opacity_body_on();" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLabel">
                            créer un dossier
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-12">
                <?php
                include_once('./table/table.php');
                ?>
            </div>
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