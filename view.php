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


 
<br>
<br>
<br>
<?php require_once 'includes/footer.php'; ?>