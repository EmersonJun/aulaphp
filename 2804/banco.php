<?php 
    $banco = new mysqli("localhost:3307", "root", "", "usuarios");

    function fazerLogin($user, $senha){
        $q = "SELECT * FROM usuarios WHERE usuario='usuarios'";
            $resp = $banco->query($q);
            // var_dump($resp);

            if($resp->num_rows <= 0){
                echo "<br>nao encontrado";
            } else {
                echo "<br>opa....ver senha";

                $obj_usuario = $resp->fetch_object();
                if($senha === $obj_usuario->senha){
                    echo "sucesso";
                } else {
                    echo "erro na senha";
                }
            }
    }
?>