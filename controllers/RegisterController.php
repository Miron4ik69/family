<?php 

class RegisterController
{
    /* Home page */
    public function index() 
    {
        return view('register');
    }

    public function register()
    {
    
        App::get('database')->insert('users', [
            'name' => $_POST['name'],
            'password' => $_POST['password'],
            'role' => $_POST['role']
        ]);
        

        header('Location: /login');
    }

}