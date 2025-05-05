<form action="" method="post">
    Usuario: <input type="text" name="usuario">
    Senha: <input type="text" name="senha">
    <input type="submit" value="Fazer Login">
</form>

<?php

    if($_SERVER["REQUEST_METHOD"] === "POST"){
        echo "<br>...fazendo login";

        $usuario_formulario = $_POST['usuario'] ?? null;
        $senha_formulario = $_POST['senha'] ?? null;

        if(empty($usuario_formulario) || empty($senha_formulario)){
            echo "<br>..erro no usuario ou senha";
        }else{
            echo "<br>..procurando no banco...";

            $banco = new mysqli("localhost:3307", "root", "", "usuarios");
            $q = "SELECT * FROM usuarios WHERE usuario='$usuario_formulario'";
            $resp = $banco->query($q);
            // var_dump($resp);

            if($resp->num_rows <= 0){
                echo "<br>... nao encontrado";
            }else{
                echo "<br> opa... ver senha";

                $obj_usuario = $resp->fetch_object();
                if($senha_formulario === $obj_usuario->senha){
                    echo "<br> sucesso!";
                }else{
                    echo "<br>... erro senha";
                }

            }



        }


    }else{
        echo "<br>Fazer Login...";
    }

?>