<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    include APPPATH."/views/header.php";
    
?>

<table class="tabelas">
    
    <tr>
        <th>Nome Pessoa</th>
        <th>Tarefas</th>
    </tr>

    <?php 
        foreach($pessoas as $pes){
            echo "<tr>";
            echo "<td>".$pes['nome']."</td>";
            echo "<td class='center'>".$pes['tarefas']."</td>";
            echo "</tr>";
        }
    ?>

</table>

<?php 
	include APPPATH."/views/footer.php";
?>

