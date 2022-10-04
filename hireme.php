<?php $title = "Request";
require_once 'includes/header.php'; 
require_once 'db/conn.php';
?>
 <br/><br/><br/><br/><br/><br/><br/><br/><br/>


<div class="container" style="position:absolute; left:0; right:0; top: 80%; transform: translateY(-50%); -ms-transform: translateY(-50%); -moz-transform: translateY(-50%); -webkit-transform: translateY(-50%); -o-transform: translateY(-50%);">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-9 col-xl-9 col-xxl-7">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                <div class="text-center">
                                        <h4 class="text-dark mb-4"><strong>Welcome</strong> </h4>
                                          <h5>  Please complete the form below</h5>
                                    </div>
 <form action="successHire.php" class="was-validated" method="post" enctype="multipart/form-data">
  <div class="mb-3 mt-3">
    <label for="FirstName" class="form-label">First Name:</label>
    <input type="text" class="form-control" id="FirstName" placeholder="Enter First Name" name="FirstName" required>
    <div class="valid-feedback">Looks Good!</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="mb-3 mt-3">
    <label for="LastName" class="form-label">Last Name:</label>
    <input type="text" class="form-control" id="LastName" placeholder="Enter Last Name" name="LastName" required>
    <div class="valid-feedback">Looks Good!</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
 
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="email" required>
    <div id="email" class="form-text">We'll never share your email with anyone else.</div>
    <div class="valid-feedback">Looks Good!</div>
    <div class="invalid-feedback">Please fill out this field.</div>
</div>
  <div class="mb-3">
    <label for="contact" class="form-label">Contact Number</label>
    <input type="text" class="form-control" id="contact" required name="contact">
    <div class="valid-feedback">Looks Good!</div>
    <div class="invalid-feedback">Please fill out this field.</div>  
</div>
<div class="mb-3">
    <label for="comment" class="form-label">Comment</label>
    <textarea id="comment" class="form-control" name="comment" required></textarea>
    <div class="valid-feedback">Looks Good!</div>
    <div class="invalid-feedback">Please fill out this field.</div>  
</div>


  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
  
</form>
</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>   




