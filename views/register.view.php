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
        <strong>Registration</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;"  method="post" action="/reg">

            <!-- Name -->
            <div class="md-form mt-3">
                <input type="text" name="name" id="materialContactFormName" class="form-control" required>
                <label for="materialContactFormName">Name</label>
            </div>

             <!-- Password -->
             <div class="md-form mt-3">
                <input type="password" name="password" id="materialContactFormName" class="form-control" required>
                <label for="materialContactFormName">Password</label>
            </div>

            <!-- Role -->
            <span>Role in the family</span>
            <select class="mdb-select" name="role" required>
                <option value="" disabled>select</option>
                <option value="mother" >mother</option>
                <option value="father" >father</option>
                <option value="child" >child</option>
            </select>

            <!-- Send button -->
            <button class="btn btn-outline-success waves-effect" type="submit">Registration</button>
            <!-- Register -->
            <a class="btn btn-outline-info waves-effect" href="/login">Authorization</a>
        </form>
        <!-- Form -->

    </div>

    </div>
<!-- Material form contact -->
</div>

<?php require('partials/footer.php'); ?>