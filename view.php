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
 <?php }?>       


