<?php
    $title = 'View'; 

    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 

    // Get attendee by id
    if(!isset($_GET['id'])){
        include 'includes/errormessage.php';
        
    } else{
        $id = $_GET['id'];
        $result = $crud->getAttendeeDetails($id);
    
    
?>
 <link rel="stylesheet" href="assets/css/view.css">

<!-- <div class="container" style="position:absolute; left:0; right:0; top: 400px; transform: translateY(-50%); -ms-transform: translateY(-50%); -moz-transform: translateY(-50%); -webkit-transform: translateY(-50%); -o-transform: translateY(-50%);">
        <div class="row justify-content-center">
            
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                <div class="text-center">
                                        <h4 class="text-dark mb-4">Attendee Details</h4>
                                    </div>

<img src="<?php echo empty($result['avatar_path']) ? "uploads/blank.png" : $result['avatar_path'] ; ?>" class="rounded-circle" style="width: 120px; height: 120px" />


<div class="card-body">
    <h5 class="card-title"><?php echo $result['firstname'].' '. $result['lastname']; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Date of Birth is: '.$result['dateofbirth'];?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Specialty is: '.$result['name'];?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Email Address is: '.$result['email'];?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Telephone Number is: '.$result['contact'];?></h6>
  </div>


       <a href="viewrecords.php" class="btn btn-info">Back to List</a>
        <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a>
        <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-danger">Delete</a>
    <?php } ?>

</div>


</div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>   
 </div>
 
 <style>
      img {
        width: 250px;
        -webkit-filter: drop-shadow(5px 5px 5px #666666);
        filter: drop-shadow(5px 5px 5px #666666);
      }
    </style> -->






<aside class="profile-card">
  <header>
    <!-- here’s the avatar -->
    <a target="_blank" href="#">
    <img src="<?php echo empty($result['avatar_path']) ? "uploads/blank.png" : $result['avatar_path'] ; ?>" class="rounded-circle" style="width: 120px; height: 120px" />
 </a>

    <!-- the username -->
    <h1 class="card-title"><?php echo $result['firstname'].' '. $result['lastname']; ?></h1>

    <!-- and role or location -->
    <h2>
    <?php echo $result['name'];?>
          </h2>

  </header>

  <!-- bit of a bio; who are you? -->
  <div class="profile-bio">

  <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Email: '.$result['email'];?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Telephone: '.$result['contact'];?></h6>
    <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Date of Birth is: '.$result['dateofbirth'];?></h6>


  </div>

  <!-- some social links to show off -->
  <center> <a href="viewrecords.php"class="btn btn-info" role="button" aria-pressed="true">Back</a>
        <a href="edit.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-warning">Edit</a>
        <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $result['attendee_id'] ?>" class="btn btn-danger">Delete</a>
 </center>

      
</aside>
        



<br>
<br>
<br>
<?php //require_once 'includes/footer.php'; ?>