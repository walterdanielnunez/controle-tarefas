<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    include APPPATH."/views/header.php";
    
?>

<form class="form none" id="excluir_form" action="tarefas/excluir" method="post" autocomplete="off">
    <input type="hidden" name="id_tarefa" id="excluir_id">
    <p>
        Deseja excluir a seguinte tarefa? <br> 
        <b><span id='excluir_name'></span></b>
    </p>

    <p>
        <button type="button" id="hide_del_form" class="bt">Não</button>
        <button type="submit" class="bt">Sim</button>
    </p>
</form>

<table class="tabelas">
    
    <tr>
        <th>Tarefa</th>
        <th>Prioridade</th>
        <th>Status</th>
        <th>Pessoa</th>
        <th></th>
        <th></th>
    </tr>

    <?php 
        foreach($tarefas as $tarefa){
            $id = $tarefa["id_tarefa"];
            echo "<tr>";
            echo "<td>".$tarefa['nome_tarefa']."</td>";
            echo "<td class='center'>".$prioridades[$tarefa['prioridade']]."</td>";
            echo "<td class='center'>".$status[$tarefa['status']]."</td>";
            echo "<td class='center'>".$tarefa['nome']."</td>";
            echo "<td class='center'><a href='tarefas/editar/".$id."'>&#9998;</a></td>";
            echo "<td class='center'><button class='delete-bt' onclick='excluir(".$id.", \"".$tarefa['nome_tarefa']."\")'>&#10006;</button></td>";
            echo "</tr>";
        }
    ?>

</table>

<?php 
	include APPPATH."/views/footer.php";
?>

