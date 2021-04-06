<?php include('classes/Cliente.class.php');


?>


<h1>ADICIONAR CLIENTE</h1>

<form method="post" action="">
Nome do Cliente: <input type='text' name='nome'> <br/>
Email do Cliente: <input type='text' name='email'><br/>
<input type='submit' name='botao' value="Salvar">
</form>

<?php

if(isset($_POST['botao']) && $_POST['botao'] == "Salvar"){

$cliente = new Cliente();    
$cliente->setNome($_POST['nome']);
$cliente->setEmail($_POST['email']);

echo "<br/>O nome do cliente digitado foi: ".$cliente->getNome();
echo "<br/>O Email do cliente digitado foi: ".$cliente->getEmail();

}
    


?>