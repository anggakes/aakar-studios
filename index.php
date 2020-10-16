<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&amp;display=swap" rel="stylesheet">
    <style>
        html {
            padding: 0;
            margin: 0;
            width: 100%;
        }
        body {
            font-family: "Montserrat";
            letter-spacing: .1em;
            margin: 0;
            padding: 0;
            
        }
        #app {
            background-color: #bdbab5;
            
            
        }
        .page, .width-control {
            max-width: 500px;
        }
        .page {
            padding-top: 48px;
            padding-bottom: 114px;
            min-height: 100vh;
            margin: auto;
            background-color: #fff;
            /* box-shadow: 0 0 7px #737373; */
            height: 100%;
            /* margin: 0;
            padding: 0; */
        }

       

        .btn-link {
            font-weight: 400;
            color: #a00304;
            text-decoration: none;
        }

        .card-body {
            font-size:13px;
        }

        @media (min-width: 495px) { 

            .fixed-top, .fixed-bottom {
                left: 50%;
                transform: translateX(-50%);
                width: inherit;
            }
            /* .fixed-top, .fixed-bottom {
                left: 50%;
                transform: translateX(-52%);
                width: inherit;
            } */

            /* .page, .width-control {
                width:100%;
            } */
        }
        
    </style>
    <title>aakar-studios</title>
  </head>
  <body>
   
   <div id="app">
       <div class="page ">
            <!-- navbar -->
            <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color:#fbf2eb">
                <a class="navbar-brand mx-auto d-block text-center order-0 order-md-1" href="#">
                    <img src="https://www.aakarstudioplayground.com/wp-content/uploads/2020/01/aakar-studio.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
                    aakar-studios
                </a>
            
            </nav>
       
       

                                    <?php 
                            if (array_key_exists('PATH_INFO', $_SERVER)) {
                                $page = str_replace("/","", $_SERVER['PATH_INFO']);
                                switch($page) {
                                    case "home":
                                        include_once("page/home.php");
                                    break;
                                    case "view":
                                        include_once("page/view.php");
                                    case "checkout":
                                        include_once("page/checkout.php");
                                    break;
                                }
                            }else {
                                include_once("page/home.php");
                            }
                                

                                    ?>
        </div>
   </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
    <script>
        $(window).on('resize', function() {
            $('.fixed-top').css('width', $('.page').width());
            $('.fixed-bottom').css('width', $('.page').width());
        }).trigger('resize');
    </script>
  </body>
</html>

