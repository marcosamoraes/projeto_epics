<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        CRUD Cliente - Epics:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->css('style.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="<?= BASE_URL ?>">Projeto Epics</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= BASE_URL ?>">Listagem de Clientes</a>
                </li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container">
        <?= $this->fetch('content') ?>
    </div>

    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('jquery.mask.min.js') ?>
    <?= $this->Html->script('script.js') ?>
</body>
</html>
