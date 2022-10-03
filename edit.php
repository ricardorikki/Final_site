<link rel="stylesheet" href="assets/css/style.css">
<?php
    $title = 'Edit Record'; 

    require_once 'includes/header.php'; 
    require_once 'includes/auth_check.php';
    require_once 'db/conn.php'; 

    $results = $crud->getSpecialty();

    if(!isset($_GET['id']))
    {
        
        include 'includes/errormessage.php';
        header("Location: viewrecords.php");
    }
    else{
        $id = $_GET['id'];
        $attendee = $crud->getAttendeeDetails($id);
    

    
?>



	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Edit Record</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10 col-md-12">
					<div class="wrapper">
						<div class="row no-gutters">
							<div class="col-md-7 d-flex align-items-stretch">
								<div class="contact-wrap w-100 p-md-5 p-4">
									
									<div id="form-message-warning" class="mb-4"></div> 


    <form method="post" action="editpost.php">
        <input type="hidden" name="id" value="<?php echo $attendee['attendee_id'] ?>" />
        <div class="form-group">
            <label style="color: teal;font-weight: 500;" for="firstname">First Name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['firstname'] ?>" id="firstname" name="firstname">


            
        </div>
        <div class="form-group">
            <label style="color: teal;font-weight: 500;" for="lastname">Last Name</label>
            <input type="text" class="form-control" value="<?php echo $attendee['lastname'] ?>" id="lastname" name="lastname">
        </div>
        <div class="form-group">
            <label style="color: teal;font-weight: 500;" for="dob">Date Of Birth</label>
            <input type="text" class="form-control" value="<?php echo $attendee['dateofbirth'] ?>" id="dob" name="dob">
        </div>
        <div class="form-group">
            <label style="color: teal;font-weight: 500;" for="specialty">Area of Expertise</label>
            <select class="form-control" id="specialty" name="specialty">
                <?php while($r = $results->fetch(PDO::FETCH_ASSOC)) {?>
                   <option value="<?php echo $r['specialty_id'] ?>" <?php if($r['specialty_id'] == $attendee['specialty_id']) echo 'selected' ?>>
                        <?php echo $r['name']; ?>
                   </option>
                <?php }?>
            </select>
        </div>
        <div class="form-group">
            <label style="color: teal;font-weight: 500;" for="email">Email address</label>
            <input type="email" class="form-control" id="email" value="<?php echo $attendee['email'] ?>" name="email" aria-describedby="email" >
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label style="color: teal;font-weight: 500;"for="phone">Contact Number</label>
            <input type="text" class="form-control" id="contact" value="<?php echo $attendee['contact'] ?>" name="contact" aria-describedby="contact" >
            <small id="phoneHelp" class="form-text text-muted">We'll never share your number with anyone else.</small>
        </div>
        
        <a href="viewrecords.php" class="btn btn-default">Back To List</a>
        <button type="submit" name="submit" class="btn btn-success">Save Changes</button>
    </form>


</div>
			          </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>




<?php } ?>
