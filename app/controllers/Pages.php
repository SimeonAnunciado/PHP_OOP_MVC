<?php

class Pages extends Controller{
    public function __construct(){
       
    }


    public function index(){

        if (isLoggedIn()) {
            redirect('posts');
            
        }

        $data = [
            'title' => 'WELCOME' ,
            'description' => 'Social sharing network php MVC'
        ];
        
        $this->view('pages/index',$data);
    }

    public function about(){
        $data = [
            'title' => 'About Us', 
            'description' => 'App to Share Post with Other People'
        ];
        $this->view('pages/about',$data);

    }

    public function get_all_class(){
        $classes = get_declared_classes();
        echo "<pre>" .print_r($classes,true). "</pre>";
    }




}


?>