<div class="container-principal">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h2>Cadastro de cliente</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                    <?= $this->Form->create($cliente) ?>

                        <?php 
                            $endereco = explode(', ', $cliente->endereco)[0];
                            $numero = explode(', ', $cliente->endereco)[1];
                            $bairro = explode(' - ', $numero)[1];
                            $numero = explode(' - ', $numero)[0];
                        ?>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Nome</label>
                                    <input type="text" name="nome" class="form-control" value="<?= $cliente->nome ?>" required/>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Data de Nascimento</label>
                                    <input type="text" name="data_nascimento" class="form-control data-nascimento-mask" value="<?= $cliente->data_nascimento->format('d/m/Y') ?>" required/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">CPF</label>
                                    <input type="text" name="cpf" class="form-control cpf-mask" value="<?= $cliente->cpf ?>" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Celular</label>
                                    <input type="text" name="celular" class="form-control celular-mask" value="<?= $cliente->celular ?>" required/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">E-mail</label>
                                    <input type="email" name="email" class="form-control" value="<?= $cliente->email ?>" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Endereço</label>
                                    <input type="text" name="endereco" class="form-control" value="<?= $endereco ?>" required/>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label class="control-label">Número</label>
                                    <input type="text" name="numero" class="form-control" value="<?= $numero ?>" required/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label class="control-label">Bairro</label>
                                    <input type="text" name="bairro" class="form-control" value="<?= $bairro ?>" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Status</label>
                                    <select name="status" class="form-control">
                                        <option value="1" <?= $cliente->status == 1 ? 'selected' : '' ?>>Ativo</option>
                                        <option value="2" <?= $cliente->status == 2 ? 'selected' : '' ?>>Inativo</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary pull-right">Editar</button>
                        <div class="clearfix"></div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>