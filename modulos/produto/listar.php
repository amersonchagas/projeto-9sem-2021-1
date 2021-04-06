<?php
    $produtos = array();

    $produtos[] = array("id" => 1, "descricao" => "coca-cola",      "preco" => 8.0,     "quantidade" => 22);
    $produtos[] = array("id" => 2, "descricao" => "Micos",          "preco" => 8.0,     "quantidade" => 2);
    $produtos[] = array("id" => 3, "descricao" => "Sal",            "preco" => 8.0,     "quantidade" => 209);
    $produtos[] = array("id" => 4, "descricao" => "Batata   ",       "preco" => 8.0,     "quantidade" => 209);
    $produtos[] = array("id" => 5, "descricao" => "Batatao   ",       "preco" => 8.0,     "quantidade" => 209);
?>


<table>

<tr>
    <th>ID</th>
    <th>Descrição</th>
    <th>Preço</th>
    <th>Quantidade</th>
</tr>

<?php
    foreach($produtos as $produto){
?>
<tr>
    <td><?php echo $produto['id'];?></td>
    <td><?php echo $produto['descricao'];?></td>
    <td><?php echo $produto['preco'];?></td>
    <td><?php echo $produto['quantidade'];?></td>
</tr>
<?php
    }
?>
</table>