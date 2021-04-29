<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
        <div class="x_title">
            <h2>Produto: <small>Novo</small></h2>

            <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <form id="demo-form2" action="<?= base_url('produto/gravar')?>" method="post" data-parsley-validate class="form-horizontal form-label-left">
                <fieldset>
                    <!-- Form Name -->
                    <legend>Adicionar produto</legend>
                    <div class="item form-group">
                        <label class="col-md-4 control-label" for="codigo">Id</label>
                        <div class="col-md-4">
                            <input type="text" value="<?= $registro['id'] ?>" class="form-control input-md" name="id" readonly >
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="item form-group">
                        <label class="col-md-4 control-label" for="titulo">Título</label>
                        <div class="col-md-4">
                            <input id="titulo" name="titulo" value="<?= $registro['titulo'] ?>"  type="text" placeholder="Título" class="form-control input-md" required="">
                        </div>
                    </div>

                    <!-- Textarea -->
                    <div class="item form-group">
                        <label class="col-md-4 control-label" for="descricao">Descrição</label>
                        <div class="col-md-4">
                            <textarea class="form-control" id="descricao" name="descricao"><?= $registro['descricao'] ?></textarea>
                        </div>
                    </div>

                    <!-- File Button -->
                    <div class="item form-group">
                        <label class="col-md-4 control-label" for="imagem">Cor</label>
                        <div class="col-md-4">
                            <input id="imagem1" name="cor" value="<?= $registro['cor'] ?>"  class="form-control" type="text" placeholder="Insira uma cor"><br>
                        </div>
                    </div>

                    <!-- File Button -->
                    <div class="item form-group">
                        <label class="col-md-4 control-label" for="imagem">Valor</label>
                        <div class="col-md-4">
                            <input id="imagem1" name="valor" value="<?= $registro['valor'] ?>"  class="form-control" type="text" placeholder="Insira um valor"><br>
                        </div>
                    </div>

                    <div class="item form-group">
                        <label class="col-md-4 control-label" for="imagem">Imagens</label>
                        <div class="col-md-4">
                            <input id="imagem1" name="imagem[]" value="<?= $registro['imagens'][0]['url'] ?>"  class="form-control" type="text" placeholder="Insira uma url"><br>
                            <input id="imagem2" name="imagem[]" value="<?= $registro['imagens'][0]['url'] ?>"  class="form-control" type="text" placeholder="Insira uma url"><br>
                            <input id="imagem3" name="imagem[]" value="<?= $registro['imagens'][0]['url'] ?>"  class="form-control" type="text"  placeholder="Insira uma url"><br>
                        </div>
                    </div>
                </fieldset>
                <div class="ln_solid"></div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-primary" type="button">Cancelar</button>
                        <button type="submit" class="btn btn-success">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>