<?php $title = "Request";
require_once 'includes/header.php'; 
require_once 'db/conn.php';
?>
 <br/><br/><br/><br/><br/><br/><br/><br/><br/><!--<center><h1>Quotation Request </h1></center><center><h5>Please fill out the form below</h5></center>

<section class="container d-flex align-items-center justify-content-center" style="width: 100%;">
<div class="position-relative mx-2 my-5 m-md-5">
 <div class="container position-relative">
<div class="border rounded shadow p-2 p-md-3 p-lg-4" method="post" style="background: var(--bs-body-bg);">
 <form action="success.php" class="was-validated" method="post" enctype="multipart/form-data">
  <div class="mb-3 mt-3">
    <label for="fname" class="form-label">First Name:</label>
    <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="FirstName" required>
    <div class="valid-feedback">Looks Good!</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="mb-3 mt-3">
    <label for="lname" class="form-label">Last Name:</label>
    <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="LastName" required>
    <div class="valid-feedback">Looks Good!</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="mb-3 mt-3">
    <p>Date: <input type="date" class="form-control" id="date" name="date" required></p>
    <div class="valid-feedback">Looks Good!</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <label for="spe" class="form-label" >Specialty</label>
  <select class="form-select" id="spe" aria-label="Default select example" name="specialty" required> 
  <option value="1">Poster Design</option>
  <option value="2">Web Design</option>
  <option value="3">Database Design</option>
  <option value="4">Software Design</option>
  <option value="5">Book Cover Design</option>

  <div class="valid-feedback">Looks Good!</div>
    <div class="invalid-feedback">Please select.</div>  
    </select><p></p>
 
    <div class="mb-3 mt-3"> 
     <label for="avatar"  class="form-text text-muted">Requirements File Upload is Optional</label>
     <input type="file"  class="form-control" id="avatar"  name="avatar" />
    
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


  <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
  
    </form></div>
    </div>
</div><!--Form Div 
</section>
-->



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
 <form action="success.php" class="was-validated" method="post" enctype="multipart/form-data">
  <div class="mb-3 mt-3">
    <label for="fname" class="form-label">First Name:</label>
    <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="FirstName" required>
    <div class="valid-feedback">Looks Good!</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="mb-3 mt-3">
    <label for="lname" class="form-label">Last Name:</label>
    <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="LastName" required>
    <div class="valid-feedback">Looks Good!</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>

  <div class="mb-3 mt-3">
  <label for="dob" class="form-label">Date of Birth: </label>
    <input type="date" class="form-control" id="dateofbirth" name="dob" required>
    <div class="valid-feedback">Looks Good!</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <label for="spe" class="form-label" >Specialty</label>
  <select class="form-select" id="spe" aria-label="Default select example" name="specialty" required> 
  <option value="1">Software Developer</option>
  <option value="2">Web Administrator</option>
  <option value="3">Database Administrator</option>
  <div class="valid-feedback">Looks Good!</div>
    <div class="invalid-feedback">Please select.</div>  
</select><p></p>
 
<div class="mb-3 mt-3"> 
     <label for="avatar"  class="form-text text-muted">File Upload is Optional</label>
     <input type="file" accept="image/*" class="form-control" id="avatar"  name="avatar" />
    
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




<?php require_once 'includes/footer.php'; ?> 