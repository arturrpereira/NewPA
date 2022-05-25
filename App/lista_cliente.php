<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Lista Clientes</title>
</head>
<body>

    <table class="table table-dark">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">RG</th>
            <th scope="col">Email</th>
            <th scope="col">CPF</th>
            <th scope="col">Telefone</th>
            <th scope="col">Data Nascimento</th>
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
