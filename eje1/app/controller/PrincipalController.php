<?php

    namespace app\controller;

    class PrincipalController{
        public function index(){
            return $this->view("PrincipalView",["titulo"=>"Principal"]);
        }

        public function calcular(){
            $nombre = $_POST["nombre"];
            $correo = $_POST["correo"];
            $dui = $_POST["dui"];

            //Calculo
            $capital = (float)$_POST["capital"];
            $interes = (float)$_POST["interes"];
            $cuotas = (int)$_POST["cuotas"];

            $reg_correo = "#^[a-zA-Z0-9_.%+-]+@[a-zA-Z-.]+\.[a-zA-Z]{2,}#";
            $reg_dui = "#^[0-9]{8}-[0-9]{1}$#";
            if(!preg_match($reg_correo,$correo)){
                return $this->view("PrincipalView",["titulo"=>"Error","error"=>"Error en el correo"]);
            }

            if(!preg_match($reg_dui,$dui)){
                return $this->view("PrincipalView",["titulo"=>"Error","error"=>"Error en el dui"]);
            }

            return $this->view("CalculadoView",["nombre"=>$nombre,"correo"=>$correo,"dui"=>$dui,"capital"=>$capital,"cuotas"=>$cuotas,"interes"=>$interes]);
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