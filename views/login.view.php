<?php 
session_start(); 

if($_SESSION){
    header('Location: /home');
}


?>
<?php require('partials/head.php'); ?>
<body class="login-page">

<div class="container d-flex justify-content-center align-items-center" style="height: 100vh;">
    <div class="card col-md-6">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Authorization</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" method="post" action="auth">

            <!-- Name -->
            <div class="md-form mt-3">
                <input type="text" id="materialContactFormName" name="name" class="form-control" required>
                <label for="materialContactFormName">Name</label>
            </div>

             <!-- Password -->
             <div class="md-form mt-3">
                <input type="password" id="materialContactFormName" name="password" class="form-control" required>
                <label for="materialContactFormName">password</label>
            </div>

            <!-- Send button -->
            <button class="btn btn-outline-success waves-effect" type="submit">Authorization</button>
            <!-- Register -->
            <a class="btn btn-outline-info waves-effect" href="/registration">Registration</a>
        </form>
        <!-- Form -->

    </div>

    </div>
<!-- Material form contact -->
</div>

<?php require('partials/footer.php'); ?>