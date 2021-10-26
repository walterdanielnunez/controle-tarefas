<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo;?></title>
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/style.css">
    <script src="<?=base_url();?>/assets/js/jquery.min.js"></script>
    <script src="<?=base_url();?>/assets/js/main.js"></script>
</head>
    <body>
        <div class="menu">
            <a href="<?=base_url();?>">Home</a>
            <a href="<?=base_url();?>tarefas">Tarefas</a>
            <a href="<?=base_url();?>tarefas/nova">Nova Tarefa</a>
            <a href="<?=base_url();?>pessoas">Pessoas</a>
        </div>

        <?php 
            if(isset($error)){
                echo "<div class='error'>";
                echo $error;
                echo "</div>";
            }
        ?>




