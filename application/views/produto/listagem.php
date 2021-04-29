<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Produtos <small>Listagem de produtos</small></h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">

            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Cor</th>
                        <th>Qtd</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php 
    if( !empty($dados) ) {
        foreach($dados as $dado) {
?>
                    <tr>
                        <th scope="row"><?= $dado['id']?></th>
                        <td><?= $dado['titulo']?></td>
                        <td><?= $dado['cor']?></td>
                        <td><?= $dado['qtd_estoque']?></td>
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