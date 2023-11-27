<?php
include_once('dbConnect.php');
include_once('./contact.class.php');
// $sel = new contact();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <title>table contact</title>
</head>
<body>

<header class="p-2 w-100 bg-primary text-white">
        <div class="container-fluid">

            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="./acceil.php" class="nav-link  text-secondary  text-light p-1 fs-4">Contact list</a></li>

                </ul>

                <div class="text-end">
                 <a href="contact.php">   <button  type="button" class="btn btn-outline-light fs-5" style="border: none">add New contact</button></a>
                </div>
            </div>
        </div>
    </header>
    <div class="text-center  mt-4 fs-1 ">Table Contact</div>
    <!-- table de contact -->
    <div class="container-fluid mt-4 table-responsive">
<table class="table  table-hover "style="border-radi">
                <thead>
                    <tr>
                        <th scope="col">image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Télephone</th>
                        <th scope="col">Adresse</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
  <tbody>
   <?php  
   
   $sel = new contact(connect());
   $data = $sel->select(); 
  foreach($data as $row){?>
            <tr class="bg-white ">
                <td> <img class="rounded-circle" src="./assets/e8ad08.jfif" alt="calling" height="50" width="50">
                <td> <?php echo $row['Name'];?></td>
                <td> <?php echo $row['email'];?></td>
                <td> <?php echo $row['phone'];?></td>
                <td> <?php echo $row['adresse'];?></td>

                <td><a href='edit.php?id=<?php echo $row['id'];?>' class="btn bg-success text-white">edited</a></td>
                <td><a href='delete.php?id=<?php echo $row['id'];?>' class="btn bg-danger text-white"> Delete</a></td>
                </tr>
        <?php }?>
  </tbody>
</table>
  

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
    <!-- script bootstrap -->
</body>

</html>