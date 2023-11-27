<?php

include_once('contact.class.php');
include_once('dbConnect.php');
    
if (isset($_POST['Update'])){
    $contact = new contact(connect());
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $id = $_GET['id'];
    $contact->editpost($name,$email,$phone,$address,$id);
}



  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <header class="p-2 bg-primary text-white">
        <div class="container-fluid">

            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="./" class="nav-link  text-secondary  text-light p-1 fs-4">Contact list</a></li>

                </ul>

                <div class="text-end">
                    <a href="./profil.php"  class="btn btn-outline-light fs-5" style="border: none"><?php echo $_SESSION['username']; ?></a>
                    <button type="button" class="btn btn-outline-light fs-5" style="border: none">contacts</button>
                    <button type="button" class="btn btn-outline-light fs-5" style="border: none">Logout</button>


                </div>
            </div>
        </div>
    </header>

    <div class="container d-flex flex-column-reverse flex-lg-row justify-content-between align-items-center">
        <div class="w-100"> 
            <h2 class="pb-3">contacts</h2>
            <h4>class list:</h4>
            <h3>Add contact</h3>
            <?php
 include_once('dbConnect.php');
 include_once('contact.class.php');
 
 $a = new contact(connect());
if (isset($_GET['id'])){
$results = $a->affichagepost($_GET['id']);
}



?>
  

            <form class="row g-3 d-flex" method="POSt" >
            <?php foreach($results as $result){?>
                
       
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" value="<?php if(isset($result['Name'])) echo $result['Name'] ?>" id="inputEmail4">
                </div>
                <div class="col-md-6">
                 <label for="inputPassword4" class="form-label">Phone</label>
                    <input type="text" name="phone" class="form-control" value="<?php if(isset($result['phone'])) echo $result['phone']  ?>" id="inputPassword4">
                </div>

                <div class="col-12">
                    <label for="inputAddress" class="form-label">Email</label>
                    <input type="text" name="email" class="form-control" value="<?php if(isset($result['email'])) echo $result['email']  ?>" id="inputAddress">
                </div>
                <div class="col-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Address</label>
                    <input type="text" class="form-control" name="address" value="<?php if(isset($result['adresse'])) echo $result['adresse']  ?>" ></input>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" name="Update" class="btn btn-primary p-3 w-50">edit</button>
                </div>
            <?php }?>
            </form>
            
     

        </div>
        <div class="">
            <img src="./assets/undrwwww.svg" alt="calling" height="400" width="400">
        </div>
    </div>
    

    <!-- script bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- script bootstrap -->
</body>

</html>