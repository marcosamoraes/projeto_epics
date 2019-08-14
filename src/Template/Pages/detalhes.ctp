<div class="container-principal">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h2>Cliente <?= $cliente->nome ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Nome</label>
                                <input type="text" name="nome" class="form-control" value="<?= $cliente->nome ?>" disabled/>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label class="control-label">Data de Nascimento</label>
                                <input type="text" name="data_nascimento" class="form-control data-nascimento-mask" value="<?= $cliente->data_nascimento->format('d/m/Y') ?>" disabled/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label class="control-label">CPF</label>
                                <input type="text" name="cpf" class="form-control cpf-mask" value="<?= $cliente->cpf ?>" disabled/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Celular</label>
                                <input type="text" name="celular" class="form-control celular-mask" value="<?= $cliente->celular ?>" disabled/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">E-mail</label>
                                <input type="email" name="email" class="form-control" value="<?= $cliente->email ?>" disabled/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Endereço</label>
                                <input type="text" name="endereco" class="form-control" value="<?= $cliente->endereco ?>" disabled/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <input type="text" name="status" class="form-control" value="<?= $cliente->status == 1 ? 'Ativo' : 'Inativo' ?>" disabled/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Data de criação</label>
                                <input type="text" name="criado" class="form-control" value="<?= $cliente->criado->format('d/m/Y H:i:s') ?>" disabled/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label">Data de modificação</label>
                                <input type="text" name="modificado" class="form-control" value="<?= $cliente->modificado->format('d/m/Y H:i:s') ?>" disabled/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>