<?php $title = "View Records";
require_once 'includes/header.php'; 
require_once 'db/conn.php';
require_once 'includes/auth_check.php';
 // Get all attendees
 $results = $crud->getAttendees();
?>

<div class="container" style="position:absolute; left:0; right:0; top: 60%; transform: translateY(-50%); -ms-transform: translateY(-50%); -moz-transform: translateY(-50%); -webkit-transform: translateY(-50%); -o-transform: translateY(-50%);">
        <div class="row justify-content-center">
            <div class="col-md-20 col-lg-9 col-xl-9 col-xxl-7">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                <div class="text-center">
                                        <h4 class="text-dark mb-4">Confirmed Attendees</h4>
                                    </div>
  <div class="table-responsive-sm">
<table class="table">
<thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Contact</th>
            <th>Actions</th>
        </tr></thead> <tbody>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
           <tr>
                <td><?php echo $r['attendee_id'] ?></td>
                <td><?php echo $r['firstname'] ?></td>
                <td><?php echo $r['lastname'] ?></td>
                
                <td><?php echo $r['contact'] ?></td>
                <td>
                    <a href="view.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-primary">View</a>
                    <a href="edit.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-danger">Delete</a>
                </td>
           </tr> 
        <?php }?> </tbody>
    </table></div>
</div>



</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   


