<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Pedidos <small>Listagem de pedidos</small></h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Cliente</th>
                        <th>Forma de Pagamento</th>
                        <th>Descrição</th>
                        <th>Frete</th>
                        <th>Valor Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($dados)) {
                        foreach ($dados as $dado) {
                            ?>
                            <tr>
                                <th scope="row"><?= $dado['id'] ?></th>
                                <td><?= $dado['cliente'] ?></td>
                                <td><?= getFormas($dado['forma_pagto']) ?></td>
                                <td><?= !empty( $dado['num_card'] ) ? $dado['num_card'] ." - ". $dado['bandeira'] : '-' ?></td>
                                <td><?= $dado['frete'] ?></td>
                                <td><?= $dado['valor_total'] ?></td>
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