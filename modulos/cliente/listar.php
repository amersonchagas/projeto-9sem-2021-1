<?php
    $clientes = array();
    $clientes[] = array("id" => 1, "nome" => "Joao", "email" => "joao@gmail.com");
    $clientes[] = array("id" => 2, "nome" => "Maria", "email" => "maria@gmail.com");
    $clientes[] = array("id" => 3, "nome" => "Pedro", "email" => "pedro@gmail.com");           
?>
<table>

<tr>
    <th>ID</th>
    <th>Nome</th>
</tr>

<?php
    foreach($clientes as $cliente){
?>
    <tr>
        <td><?php echo $cliente['id'];?></td>
        <td><?php echo $cliente['nome'];?></td>
        <td><?php echo $cliente['email'];?></td>
    </tr>
<?php
    }
?>
</table>