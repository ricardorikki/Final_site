<?php $title = "Success Hire";
require_once 'includes/header.php'; 
require_once 'db/conn.php';


  if(isset($_POST['submit'])){
      $FirstName = $_POST['FirstName'];
      $LastName = $_POST['LastName'];
      $email = $_POST['email'];
      $contact = $_POST['contact'];
      $comment = $_POST['comment'];
      $isSuccess = $crud->insertHireMe($FirstName,$LastName,$email,$contact,$comment);

  if ($isSuccess){
    
      echo'<br>';
      echo'<br>';

      include 'includes/successmessage.php';
      }
    else{
      echo'<br>';
      echo'<br>';

     include 'includes/errormessage.php';
  }
}

?>

<h3 class="text-center">Thank You</h3>
<p class="text-center">I will respond to you as soon as posible.</p>

<div class="container d-flex align-items-center justify-content-center">
<div class="card" style="width: 34rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $_POST['FirstName'].' '. $_POST['LastName']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Email Address is: '.$_POST['email'];?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Telephone Number is: '.$_POST['contact'];?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Comment: '.$_POST['comment'];?></h6>
  </div>
</div>
</div>



