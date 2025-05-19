<h3>Tarefas: <?$nomeUsuario?></h3>
    <?php
        while($tarefa = $resp->fetch_object()){
    ?>
            <li>
             <?$tarefa->texto?>;
             <a href='apagar.php?id=$tarefa->id'>[apagar]</a>
             <a href='editar.php?id=$tarefa->id'>[editar]</a>
            </li>
    <?php 
        }
    ?>
<form action="add-tarefa.php" method="post">
    Nova Tarefa: <input type="text" name="nova-tarefa">
    <input type="submit" value="Salvar">
</form>