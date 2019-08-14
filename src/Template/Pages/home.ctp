<div class="container-principal">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h2>Clientes</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content table-responsive">
                    <div class="card-header">
                        <a href="<?= BASE_URL.'cadastrar' ?>"><button class="btn btn-primary">Adicionar cliente</button></a>
                    </div>
                    <table class="table">
                        <thead class="text-primary">
                            <th class="text-center thead-title"><?= $this->Paginator->sort('id', 'ID') ?></th>
                            <th class="text-center thead-title"><?= $this->Paginator->sort('nome', 'Nome') ?></th>
                            <th class="text-center thead-title"><?= $this->Paginator->sort('cpf', 'CPF') ?></th>
                            <th class="text-center thead-title"><?= $this->Paginator->sort('email', 'E-mail') ?></th>
                            <th class="text-center thead-title"><?= $this->Paginator->sort('status', 'Status') ?></th>
                            <th class="text-center thead-title">Alterar Status</th>
                            <th class="text-center thead-title"></th>
                            <th class="text-center thead-title"></th>
                        </thead>
                        <tbody>
                            <?php foreach($clientes as $cliente) { ?>
                                <tr>
                                    <td class="text-center"><?= $cliente->id ?></td> 
                                    <td class="text-center"><?= $cliente->nome ?></td> 
                                    <td class="text-center"><?= $cliente->cpf ?></td>
                                    <td class="text-center"><?= $cliente->email ?></td>
                                    <td class="text-center"><?= $cliente->status == 1 ? '<span style="color: green">Ativo</span>' : '<span style="color: red">Inativo</span>' ?></td>
                                    <td class="text-center">
                                        <?php if($cliente->status == 1) { ?>
                                            <a href="<?= BASE_URL.'mudar-status/'.$cliente->id ?>"><button class="btn btn-danger">Inativar Cliente</button></a>
                                        <?php } else { ?>
                                            <a href="<?= BASE_URL.'mudar-status/'.$cliente->id ?>"><button class="btn btn-green">Ativar Cliente</button></a>
                                        <?php } ?>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= BASE_URL.'detalhes/'.$cliente->id ?>"><button class="btn btn-primary">Detalhes</button></a>
                                    </td>
                                    <td class="text-center">
                                        <a href="<?= BASE_URL.'editar/'.$cliente->id ?>"><button class="btn btn-primary">Editar</button></a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="paginator">
                        <ul class="pagination">
                            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('Próximo') . ' >') ?>
                        </ul>
                        <p><?= $this->Paginator->counter('{{page}} de {{pages}}') ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>