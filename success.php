<?php $title = "Success";
require_once 'includes/header.php'; 
require_once 'db/conn.php';
//require_once 'sendemail.php';


if(isset($_POST['submit'])){
  $fname = $_POST['FirstName'];
  $lname = $_POST['LastName'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $specialty = $_POST['specialty'];
  


  $orig_file = $_FILES["avatar"]["tmp_name"];
  $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
  $target_dir = 'uploads/';
  $destination = "$target_dir$contact.$ext";
  move_uploaded_file($orig_file,$destination);

$isSuccecc = $crud->insertAttendee($fname,$lname,$dob,$email,$contact,$specialty,$destination);
  $specialtyName = $crud->getSpecialtyById($specialty);



  if ($isSuccecc){
     // SendEmail::SendMail($email,'Your registration is successful','We look forward to seeing you!!');
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

<br/>


<style>
      img {
        width: 250px;
        -webkit-filter: drop-shadow(5px 5px 5px #666666);
        filter: drop-shadow(5px 5px 5px #666666);
        
      }
    </style>



<h3 class="text-center">Thank you for Registering</h3>
<p class="text-center">We look forward to seeing you!</p>

<div class="container d-flex align-items-center justify-content-center">
<div class="card" style="width: 34rem;">
  <div class="card-body">



<div class="card-body "><img src="<?php echo $destination; ?>" class="rounded-circle d-flex align-items-center" style="width: 170px; height: 170px" />
<br>

    <h5 class="card-title"><?php echo $_POST['FirstName'].' '. $_POST['LastName']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Date of Birth is: '.$_POST['dob'];?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Specialty is: '.$specialtyName['name'];?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Email Address is: '.$_POST['email'];?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Telephone Number is: '.$_POST['contact'];?></h6>
  </div>
</div>

</div>
</div>

</div>




<?php echo'<br>'; require_once 'includes/footer.php'; ?>

