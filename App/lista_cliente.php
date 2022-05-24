<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Clientes</title>
</head>
<body>

    <table>
        <tr>
            <th></th>
            <th>Id</th>
            <th>Nome</th>
            <th>RG</th>
            <th>Email</th>
            <th>CPF</th>
            <th>Telefone</th>
            <th>Data Nascimento</th>
        </tr>

        <?php foreach($model->rows as $item): ?>
        <tr>
          
            <td><?= $item->id_cliente ?></td>
            <td><?= $item->nome_cliente ?></td>
            <td><?= $item->rg_cliente ?></td>
            <td><?= $item->email_cliente ?></td>
            <td><?= $item->cpf_cliente ?></td>
            <td><?= $item->telefone_cliente ?></td>
            <td><?= $item->datanasc_cliente ?></td>
        </tr>
        <?php endforeach ?>


        <?php if(count($model->rows) == 0): ?>
            <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
            </tr>
        <?php endif ?>

    </table>

</body>
</html>