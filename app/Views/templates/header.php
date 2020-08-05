<!DOCTYPE html>
<html lang="pt-Br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= site_url('assets/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= site_url('assets/font-awesome-4.7.0/css/font-awesome.min.css') ?>">
  <title>Tarefas</title>
</head>

<body>

  <header class="bg-dark">
    <nav class="container d-flex justify-content-between py-3">
      <h1 class="text-white">Lista de Tarefas</h1>
      <?php if (isset($site)) : ?>
        <?php if ($site === 'add') : ?>
          <h1 class="text-white">Adicionar Tarefa</h1>
        <?php elseif ($site === 'edit') : ?>
          <h1 class="text-white">Editar Tarefa</h1>
        <?php endif ?>
      <?php else : ?>
        <a class="btn btn-primary btn-lg" href="<?= site_url('/add') ?>">Nova Tarefa</a>
      <?php endif ?>
    </nav>
  </header>