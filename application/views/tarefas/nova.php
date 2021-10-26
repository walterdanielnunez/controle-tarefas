<?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    include APPPATH."/views/header.php";

?>
<form class="form" method="post" action="add" autocomplete="off">

    <div class="field">
        Nome tarefa:
        <input type="text" name="nome_tarefa" value="<?=@$dados["nome_tarefa"];?>" maxlength="30" required autofocus>
    </div>

    <div class="field">
        Prioridade:
       <select name="prioridade">
           <?php 
               foreach($prioridades as $id => $prioridade){
                   echo "<option value='".$id."'>".$prioridade."</option>";
               }
           ?>
       </select>
    </div>

    <div class="field">
        Status:
        <select name="status">
           <?php 
               foreach($status as $id => $st){
                   echo "<option value='".$id."'>".$st."</option>";
               }
           ?>
       </select>
    </div>

    <div class="field">
        Pessoa:
        <select name="pessoa">
           <?php 
               foreach($pessoas as $pes){
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