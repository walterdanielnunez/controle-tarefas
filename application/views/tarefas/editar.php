<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    include APPPATH."/views/header.php";

?>
<form class="form" action="../save/<?=$id_tarefa;?>" method="post" autocomplete="off">

    <div class="field">
        Nome tarefa:
        <input type="text" name="nome_tarefa" maxlength="30" value="<?=$tarefa["nome_tarefa"];?>" required autofocus>
    </div>

    <div class="field">
        Prioridade:
       <select name="prioridade">
           <?php 
               foreach($prioridades as $id => $prioridade){
                   $selected = ($tarefa["prioridade"] == $id) ? " selected" : "";
                   echo "<option value='".$id."'".$selected.">".$prioridade."</option>";
               }
           ?>
       </select>
    </div>

    <div class="field">
        Status:
        <select name="status">
           <?php 
               foreach($status as $id => $st){
                   $selected = ($tarefa["status"] == $id) ? " selected" : "";
                   echo "<option value='".$id."'".$selected.">".$st."</option>";
               }
           ?>
       </select>
    </div>

    <div class="field">
        Pessoa:
        <select name="pessoa">
           <?php 
               foreach($pessoas as $pes){
                   $selected = ($tarefa["pessoa"] == $pes["id_pessoa"]) ? " selected" : "";
                   echo "<option value='".$pes['id_pessoa']."'".$selected.">".$pes["nome"]."</option>";
               }
           ?>
       </select>
    </div>

    <p>
        <button type="submit" class="bt">Salvar</button>
    </p>

</form>

<?php 
	include APPPATH."/views/footer.php";
?>