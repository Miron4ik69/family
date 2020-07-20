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
      App::get('database')->addTasks('tasks', [
        
      ]);
    }
}