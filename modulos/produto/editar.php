<?php
include('classes/Produto.class.php'); 
include("classes/DB.class.php");


if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){   
    $att = new Produto($_POST['id']);
    $att->setDescricao($_POST['descricao']);
    $att->setPreco($_POST['preco']);
    $att->setQuantidade($_POST['quantidade']);
    $att->atualizar();   
}
?>

<h1>Editar Produto</h1>
<?php
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $editar = new Produto($_GET['id']);
?>

<form method="post" action="">
Descrição do Produto: <input type='text' name='descricao' value="<?php echo $editar->getDescricao();?>"> <br/>
Preço do Produto: <input type='text' name='preco' value="<?php echo $editar->getPreco();?>"><br/>
Quantidade do Produto: <input type='text' name='quantidade'><br/>

<input type='hidden' name='id' value="<?php echo $editar->getId();?>">
<input type='submit' name='botao' value="Salvar">
</form>

<?php }?>
