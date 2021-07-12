<?php
include('classes/Cliente.class.php');

if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){
    include("classes/DB.class.php");
    $att = new Cliente($_POST['id']);
    $att->setNome($_POST['nome']);
    $att->setEmail($_POST['email']);
    $att->atualizar();   
}
?>

<h1>Editar Cliente</h1>
<?php
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $editar = new Cliente($_GET['id']);
?>

<form method="post" action="">
Nome do Cliente: <input type='text' name='nome' value="<?php echo $editar->getNome();?>"> <br/>
Email do Cliente: <input type='text' name='email' value="<?php echo $editar->getEmail();?>"><br/>
<input type='hidden' name='id' value="<?php echo $editar->getId();?>">
<input type='submit' name='botao' value="Salvar">
</form>

<?php }?>
