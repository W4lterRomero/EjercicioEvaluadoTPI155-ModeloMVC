<?php


namespace app\controllers;

class HomeController{
    public function index(){
        return $this->view("HomeView", ['title' => 'MiVista']);
    }
    public function inicio(){
        return $this->view("inicio", ['title' => 'Ejercicio evaluado vista']);
    }
    public function lenguaje(){
        return $this->view("lenguaje", ['title' => 'MiVista']);
    }
    public function contacto(){
        return $this->view("contacto", ['title' => 'MiVista']);
    }

/*     public function view(){
        return "funcion view";
    } */
    public function view($vista,$data =[]){
        //require_once("../app/views/HomeView.php");
        //extrae cada item y asocia el valor a cada variable
        //Si yo le paso 5 variables 
        extract($data);
        if(file_exists("../app/views/$vista.php")){
            ob_start();
            include "../app/views/$vista.php";
            $content = ob_get_clean();
            return $content;
        }
        else{
            echo "vista no encotrada ../app/views/$vista.php";
            
        }
        return "hola desde la pagina Home";

    }

}


?>
