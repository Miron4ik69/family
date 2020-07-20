<!--Card-->
<div class="card indigo text-center z-depth-2 light-version py-4 px-5">
  <h3 class="text-danger font-weight-bold">Add each new task from a new line!</h3>
  <form enctype="multipart/form-data" class="md-form" action="uploadfile" method="post">
    <div class="file-field">
    <h4 class="card-title text-white"><a>Upload file</a></h4>
      <div class="btn btn-outline-white waves-effect btn-sm float-left">
        <span>Choose file<i class="fas fa-cloud-upload-alt ml-3" aria-hidden="true"></i></span>
        <input name="uploadfile" type="file">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate text-white" type="text" placeholder="Upload your file">
      </div>
      <button type="submit" class="btn btn-mdb-color">MDB</button>
    </div>
  </form>
</div>
<!--/.Card-->