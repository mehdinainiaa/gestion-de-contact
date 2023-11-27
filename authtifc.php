<?php
session_start();
include_once('dbConnect.php');
include_once('./class-user.php');
if (isset($_POST['sublogin'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user1 = new User(connect());
    $user1->signin($username,$password);
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
        
    <title>Document</title>
</head>

<body>
    <header class="p-2 bg-primary text-white">
        <div class="container-fluid">
      
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="./acceil.php" class="nav-link  text-secondary  text-light p-1 fs-4">Contact list</a></li>

                </ul>

                <div class="text-end">
                    <button type="button" class="btn btn-outline-light fs-5" style="border: none">Login</button>
   


                </div>
            </div>
        </div>
    </header>
        <div class="container justify-content-between align-items-center d-flex my-5  p-4" >
            <div class="w-50 p-5">
                <h2 class="text-center">Authentificate</h2>
                <form id="inscription" method="post" > 
                <div class="mb-3">
                  <label for="username" class="form-label">User Name</label>
                  <input type="text" name="username" class="form-control" id="username" >
                  <div  class="alert d-none"></div>
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" name="password" class="form-control" id="password1" >
                  <div  class="alert d-none"></div>
                </div>
                <input type="submit" name="sublogin" id="botona" class="btn btn-primary w-100" value="Login">
              </form>
            </div>
            <div>
                <img src="./assets/authentif.jpg " alt="calling" height="460" width="460">
            </div>
        </div>

        <!-- script bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
            crossorigin="anonymous"></script>
            <script src="./singin.js"></script>
        <!-- script bootstrap -->
</body>

</html>