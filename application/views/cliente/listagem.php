<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Clientes <small>Listagem de clientes</small></h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>CPF</th>
                        <th>Email</th>
                        <th>Endereco</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
    if( !empty($dados) ) {
        foreach($dados as $dado) {
?>
                    <tr>
                        <th scope="row"><?= $dado['id']?></th>
                        <td><?= $dado['nome']?></td>
                        <td><?= $dado['tel']?></td>
                        <td><?= $dado['cpf']?></td>
                        <td><?= $dado['email']?></td>
                        <td><?= $dado['endereco']?>, <?= $dado['bairro']  ?> - <?= $dado['cidade'] ?> - <?= $dado['uf'] ?> <?= $dado['cep'] ?></td>
                    </tr>
                    <?php
        }
    }
?>

                </tbody>
            </table>

        </div>
    </div>
</div>