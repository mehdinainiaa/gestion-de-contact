<?php

    include_once('dbConnect.php');
     include_once('./class-user.php');
if (isset($_POST['signup'])){
  $user1 = new User(connect());
  $user1->signup();
}

?>

 <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
<link rel="stylesheet" href="style.css">
    <title>Document</title>

</head>

<body>

    <header class="p-2 bg-primary text-white">
        <div class="container-fluid">

            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link  text-secondary  text-light p-1 fs-4">Contact list</a></li>
                </ul>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-light fs-5" href="authtifc.php"
                        style="border: none">Login</button>
                </div>
            </div>
        </div>
    </header>
    <main class="d-flex align-items-center justify-content-center position-relative reight-50" style=" margin-top : 10%">
        <div class="acceuil d-flex flex-column flex-md-row align-items-center justify-content-between  container">
            <div class="bienvenu d-flex flex-column justify-content-center align-items-center gap-4">
                <h2 class="">Welcome In Apps Liste Contact</h2>
                <p class="fs-4"> Welcome emails can deliver videos, special offers, a sign-up form, or just a friendly hello to establish a relationship with a new contact. When ...
                   <br> organic traffic and
                    flooding your business with customers eager to buy.<br> With the most effective SEO system for mehdi nainia
             
                <div class="buttons d-flex gap-2 ">
                        <!-- -----------------------------------------------button ------------------------------------------>

                    <button class="btn btn-primary text-black fs-4 p-3 " style="width: 130px;" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Sign_up</button>
                    <a class="btn btn-primary text-black fs-4 p-3 botox" href="authtifc.php" style="width: 130px;">Login</a>
                        <!-- -----------------------------------------------button ------------------------------------------>

                </div>
                <div class="social-media d-flex gap-4 ">
                    <a href="https://www.linkedin.com/in/mehdi-nainiaa-949359222" target="_blank"><i
                            class="fab fa-linkedin-in f h2"></i></a>
                    <a href="https://github.com/elmehdinainia" target="_blank"><i class="fab fa-github h2"></i></a>
                    <a href="https://web.facebook.com/" target="_blank"><i class="fab fa-facebook-f h2"></i></a>
                    <a href="https://twitter.com/MNainiaa" target="_blank"><i class="fab fa-twitter h2"></i></a>
                </div>
            </div>
            <div>
                <img src="./assets/undraw_personal_email_re_4lx7.svg " alt="calling" height="380" width="380">
            </div>
        </div>
    <!-- -----------------------------------------------sign up ------------------------------------------>

   
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Sign up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container w-50 d-flex justify-content-center flex-column p-4">
                        <h2 class="text-center p-3">Sign Up</h2>
                          <?php
                        //  include_once('cnx.php');
                        //   $conn = New conn();
               ?>
                           
 

                        <form style="margin-left:-34px" method="POST" action="acceil.php"  id="inscription">

                            <div class="mb-3 input-control">
                                <label for="exampleInputEmail1" class="form-label fs-4">User Name</label>
                                <input name="username" type="text" class="form-control p-2 test " id="username" style="width:270px"
                                    aria-describedby="emailHelp">
                                    <div  class="alert d-none"></div>
                            </div>

                            <div class="mb-3 input-control">
                                <label for="exampleInputPassword2" class="form-label fs-4">Password</label>
                                <input name="password" type="password" class="form-control p-2"id="password"style="width:270px">
                                <div  class="alert d-none"></div>
                            </div>

                            <div class="mb-3 input-control">
                                <label for="exampleInputPassword3" class="form-label fs-4 ">Password verify</label>
                                <input name="password2" type="password" class="form-control p-2"  id="password2"style="width:270px">
                                <div  class="alert d-none"></div>                       

                            <input type="submit" name="signup"  value="sign up" id="boton" class="btn btn-primary w-100 mt-2"style="margin-left:19ox">

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <div>
        </div>

        </main>

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="./sugnup.js"></script>
    <!-- script bootstrap -->
</body>

</html>