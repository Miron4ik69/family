<?php 
session_start();

class LoginController 
{

    /* Login user */
    public function login()
    {
        $result = App::get('database')->login('users', [
            'name' => $_POST['name'],
            'password' => $_POST['password']
        ]); 

        foreach($result as $res){
            $_SESSION['name'] = $res->name;
            $_SESSION['role'] = $res->role;
            $_SESSION['id'] = $res->user_id;
        }
        
        if(!$result){
            echo "<script>alert('Ошибка авторизации');</script>";
            echo "<a href='/'>Вернутся назад</a>";
            die();
        }

        header('Location: /home');
            
    }

     /* Exit session */
     public function logout()
     {
         session_destroy();
         header('Location: /');
         exit;
     }

     /* Registration user */
    public function register()
    {
        return view('register');
    }


   
}