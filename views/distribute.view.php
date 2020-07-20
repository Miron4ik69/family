<?php session_start(); 

if(!$_SESSION['role'] == "father"){
    header("Location: /home"); 
}

?>
<?php require('partials/head.php'); ?>
<body>
<?php require('partials/header.php'); ?>

<div class="container">

<!--Card-->
<div class="card  lighten-4 text-center z-depth-2 light-version py-4 px-5 mt-5">

  <form class="md-form" class="mb-3" action="/distributeupd" method="post">
    <select class="mdb-select md-form colorful-select dropdown-primary" name="fileTask" >
        <option value="" disabled>Select Task</option>
        <?php foreach($files as $file): ?>
            <option value="<?= $file; ?>"><?= $file; ?></option>
        <?php endforeach; ?>
    </select>
    <label class="mdb-main-label font-weight-bold">Tasks</label>


    <select class="mdb-select md-form colorful-select dropdown-primary" name="userId">
        <option value="" disabled>Select User</option>
        <?php foreach($users as $user): ?>
            <option value="<?= $user->user_id; ?>"><?= $user->name; ?></option>
        <?php endforeach; ?>
    </select>
    <label class="mdb-main-label font-weight-bold">Users</label>
    <button type="submit" class="btn btn-outline-secondary waves-effect">To appoint</button>
  </form>

</div>
<!--/.Card-->

</div>

<?php require('partials/footer.php'); ?>