<?php

    $banco = new mysqli("localhost:3307", "root", "", "usuarios");


    function fazerLogin($usuario, $senha){
        global $banco;
        
        $q = "SELECT * FROM usuarios WHERE usuario='$usuario'";
        $resp = $banco->query($q);
        // var_dump($resp);

        if($resp->num_rows <= 0){
            //echo "<br>... nao encontrado";
            return false;
        }else{
            //echo "<br> opa... ver senha";

            $obj_usuario = $resp->fetch_object();
            if($senha === $obj_usuario->senha){
                //echo "<br> sucesso!";
                //echo "<br> Bem Vindo " . $obj_usuario->nome;
                return true;
            }else{
                //echo "<br>... erro senha";
                return false;
            }

        }

    }


?>