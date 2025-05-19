<?php 
    class homeController{
        static function login(){
                session_start();

            if ($_SERVER['REQUEST_METHOD'] === "POST") {
            
                $usuario_formulario = $_POST['usuario'] ?? null;
                $senha_formulario = $_POST['senha'] ?? null;
            
                if (is_null($usuario_formulario) || is_null($senha_formulario)) {
                    echo "Fazer Login...";
                } else {
                
                    require "banco.php";
                
                    if (fazerLogin($usuario_formulario, $senha_formulario)) {
                        echo "Sucesso!";
                        header("Location: dashboard.php");
                    } else {
                        echo "Erro X.x";
                    }
                }
            }
            include __DIR__ . "../view/login.php";
        }

        static function dashboard(){

            session_start();
            $codUsuario = $_SESSION['id-usuario'] ?? null;
            $nomeUsuario = $_SESSION['usuario'] ?? null;

            if(is_null($codUsuario)){
                header("Location: login.php");
            }
        
            // echo "<h2>Bem vindo $nomeUsuario</h2>";
        
        
            require "banco.php";
            $q = "SELECT * FROM tarefas WHERE id_usuario=$codUsuario";
            $resp = $banco->query($q);
        
            //var_dump($resp);
        
                    include __DIR__ . "../view/dashboard.php";
            }

        static function index(){
            
        }
    }
?>