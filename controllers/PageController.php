<?php 
session_start();

class PageController 
{
    public function index() 
    {
        return view('index');
    }

    public function home()
    {

        $result = App::get('database')->getTasks('tasks', [
            'id' => $_SESSION['id']
        ]);


        return view('home', [
            'results' => $result
        ]);
    }

    public function login()
    {
        return view('login');
    }

    public function distribute()
    {
        set_include_path("./uploads/");

        $results = App::get('database')->selectDistribute('files', [
            'table' => 'users'
        ]);

        $file = file($results["file"]["file_name"], FILE_USE_INCLUDE_PATH);


        return view('distribute', [
            'files' => $file,
            'users' => $results["users"]
        ]);
    }

}