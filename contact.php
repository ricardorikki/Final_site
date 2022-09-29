<?php $title = "Contact";
require_once 'includes/header.php'; 
//require_once 'db/conn.php';
?>


<section class="position-relative py-5">
        <div class="d-md-none"><iframe allowfullscreen="" frameborder="0" src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%" height="100%"></iframe></div>
        <div class="d-none d-md-block position-absolute top-0 start-0 w-100 h-100"><iframe allowfullscreen="" frameborder="0" src="https://cdn.bootstrapstudio.io/placeholders/map.html" width="100%" height="100%"></iframe></div>
        <div class="position-relative mx-2 my-5 m-md-5">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-6 col-xl-5 col-xxl-4 offset-md-6 offset-xl-7 offset-xxl-8">
                        <div>
                            <form class="border rounded shadow p-3 p-md-4 p-lg-5" method="post" style="background: var(--bs-body-bg);">
                                <h3 class="text-center mb-3">Contact us</h3>
                                <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Name"></div>
                                <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                                <div class="mb-3"><textarea class="form-control" name="message" placeholder="Message" rows="6"></textarea></div>
                                <div class="mb-3"><button class="btn btn-primary" type="submit">Send </button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



<?php require_once 'includes/footer.php'; ?>