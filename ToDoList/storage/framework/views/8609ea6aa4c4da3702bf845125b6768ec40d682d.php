<?php $__env->startSection('title', $viewData["title"]); ?>
<?php $__env->startSection('content'); ?>

<html>
<div style='text-align:center'>
    <fieldset>
        <form method="POST" action="">
        LOGIN<br><br>
        <input type="text" name="usuario" id="usuario" placeholder="usuario"><br><br>
        <input type="password" name="senha" id="senha" placeholder="senha"><br><br>
        <input type="submit" value="Entrar"><br><br>
        Ainda não é cadastrado? <br>
        Cadastre-se aqui<br><br>
        <input type="submit" value="Novo Cadastro">
        </form>
    </fieldset>
</html>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/adrianarocha/Documents/GitHub/ProjetoPHPgrupo3/ToDoList/resources/views/home/index.blade.php ENDPATH**/ ?>