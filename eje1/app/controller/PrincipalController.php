<?php

    namespace app\controller;

    class PrincipalController{
        public function index(){
            return $this->view("PrincipalView",["titulo"=>"Principal"]);
        }

        public function view($view,$data=[]){
            if(file_exists("../app/view/".$view.".php")){
                extract($data);
                ob_start();
                include("../app/view/".$view.".php");
                $content = ob_get_clean();
                return $content;
            }
            else{
                echo "Archivo $view.php no econtrado";
            }
        }
    }

?>