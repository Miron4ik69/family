<?php 

class UploadController 
{
    public function upload()
    {
      $file = $this->uploadImage($_FILES["uploadfile"]);

      App::get('database')->insert('files', [
        "name" => $file
      ]);

      header('Location: /home');
        
    }

    protected function uploadImage($file)
    {

        $extension = pathinfo($file["name"], PATHINFO_EXTENSION);
        $filename = uniqid() . "." . $extension;

        move_uploaded_file($file["tmp_name"], "./uploads/" . $filename);

        return $filename;

    }

    public function distributeupd()
    {

      App::get('database')->insert('tasks', [
        'user_id' => $_POST['userId'],
        'text' => $_POST['fileTask']
      ]);

      header('Location: /home');
    }

    public function updStatus()
    {
      App::get('database')->update('tasks', [
        'status' => $_POST['status'],
        'id' => $_POST['id']
      ]);

      header('Location: /home');
    }
}