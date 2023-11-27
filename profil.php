<?php
    include_once('dbConnect.php');
    include_once('./class-user.php');
session_start();


$user = new User(connect());
$info=$user->get_user_data($_SESSION['username']);
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
    <link rel="stylesheet" href="./style.css">
</head>
<body class="profil">
    
<div class="d-flex justify-content-center  align-items-center vh-100 ">
<div class=" shadow p-3 mb-5 bg-body rounded w-75 h-75">
            <div class="d-flex flex-column justify-content-around align-items-center gap-5 flex-md-row py-4">
            <div class="img-bg d-flex flex-column justify-content-around align-items-center">
                <p class="h3 mb-5"></p>
                <img class="" src="./assets/profil.jpg" alt="avatar" class="rounded-circle" width="200">
            </div class="">
            <div class="info d-flex flex-column gap-5 w-50 contacts">
              <h4 class="text-center">Your profil</h4>
              <table class="table table-hover w-100">
                <tbody>
                  <tr>
                    <th>Username</th>
                    <td> <?php echo $_SESSION['username']; ?></td>
                  </tr>
                  <tr>
                    <th>last login</th>
                    <td> <?php echo $_SESSION['signin']; ?></td>
                  </tr>
                  <tr>
                    <th>LastSingup</th>
                    <td><?php   echo $info['last_signup'] ;?></td>
                  </tr>
                </tbody>
              </table>
              <div class="d-flex gap-1">
              <a class="btn btn-primary" href="./contact.php">contactS</a>
              <a class="btn btn-primary" href="./login.php">Logout</a>
              </div>
            </div>
          </div>
        </div>
        </body>
        </html>