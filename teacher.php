<!doctype html 
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<?php

include ("config.php");


if(isset($_POST['submit'])){
  $Child = $_POST['Child'];
  $Contact = $_POST['Contact'];
  $Email = $_POST['Email'];
  $Parent = $_POST['Parent'];
  $Username = $_POST['Username'];
 




$sql = "INSERT INTO `children` (Child,Contact,Email,Parent,Username) 
VALUES ('$Child','$Contact','$Email','$Parent','$Username')";

$result = mysqli_query($conn,$sql);


    if($result){
        
        header('location:teacher.php');
        
    }else{
      die(mysqli_error($conn));
    
    }
   

}

?>

  <h3> Add New Student To Roster: </h3>
  <div class="container my-5">
  <form  method="POST">
    <div class=my-3>
      <label class="form-label"> Child Name</label>
      <input type="text" class="form-control"
      placeholder="Enter child's first name" name= "Child">
    
    </div>

    <div class=my-3>
      <label class="form-label"> Contact (Phone Number)</label>
      <input type="text" class="form-control"
      placeholder="304-384-6335" name="Contact"></input>
    
    </div>

    <div class=my-3>
      <label class="form-label"> Email</label>
      <input type="text" class="form-control"
      placeholder="daycare@mycu.concord.edu" name="Email"></input>
    
    </div>

    <div class=my-3>
      <label class="form-label"> Parent Name(s)</label>
      <input type="text" class="form-control"
      placeholder="Enter Parent(s) Name" name="Parent"></input>
    
    </div>

    <div class=my-3>
      <label class="form-label"> Username</label>
      <input type="text" class="form-control"
      placeholder="Enter Username" name="Username"></input>
    
    </div>
    <button class="btn btn-dark btn-lg my-3"name="submit">Submit</button>
    <p><b>**Important Notice: In order to see the roster database update, please the refresh page after you've clicked 'Submit' </b></p>
    <br>
    <br>
    <br>
   
    
</div>

