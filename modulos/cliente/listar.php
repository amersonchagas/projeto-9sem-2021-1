<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th colspan='2'>Operação</th>
    </tr>

<?php
    $clientes = Cliente::listar();
    if($clientes){
        foreach($clientes as $cliente){
?>
        <tr>
            <td><?php echo $cliente->getId();?></td>
            <td><?php echo $cliente->getNome();?></td>
            <td><?php echo $cliente->getEmail();?></td>
            <td>Editar</td>
            <td>Excluir</td>
        </tr>
<?php
        }
    }else{
        echo "<tr><td colspan='3'> Nenhum Registro Encontrado.</td></tr>";
    }
?>
</table>