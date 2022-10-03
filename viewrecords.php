<?php $title = "View Records";
require_once 'includes/header.php'; 
require_once 'db/conn.php';
require_once 'includes/auth_check.php';
 // Get all attendees
 $results = $crud->getAttendees();
?>

 <div class="container" >
        <div class="row justify-content-center">
            
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                <div class="text-center"><br><br>
                                     <h4 class="text-dark mb-4">Confirmed Attendees</h4>
                                    </div>
  <div class="table-responsive-sm"> 

  <table class="table table-hover">
  <thead class="table-info">
        <tr>
            <th>#</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Specialty</th>
            <th>Email</th>

            <th>Contact</th>
            <th>Actions</th>
        </tr></thead>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) { ?>
           <tr>
                <td><?php echo $r['attendee_id'] ?></td>
                <td><?php echo $r['firstname'] ?></td>
                <td><?php echo $r['lastname'] ?></td>
                <td><?php echo $r['name'] ?></td>
                <td><?php echo $r['email'] ?></td>
                
                <td><?php echo $r['contact'] ?></td>
                <td>
                    <a href="view.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-primary">View</a>
                    <!-- <a href="edit.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-warning">Edit</a>
                    <a onclick="return confirm('Are you sure you want to delete this record?');" href="delete.php?id=<?php echo $r['attendee_id'] ?>" class="btn btn-danger">Delete</a>
                --> </td>
           </tr> 
        <?php }?> 
    </table>
</div>



</div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>   
 </div>

