<?= $this->include('templates/header'); ?>

<div class="container my-5">

  <?php if (isset($erro)) : ?>
    <p class='text-center text-danger'> <?= $erro->getErrors()['job'] ?></p>
  <?php endif ?>

  <?= form_open(site_url('add/submit')) ?>

  <div class="form-row">
    <div class="col-6 mx-auto">
      <div class="form-group">
        <label for="job">Nova Tarefa: </label>
        <input class="form-control" type="text" name="job" id="job" value="<?= old('job') ?>" maxlength="50">
      </div>
    </div>
  </div>
  <div class="form-row">
    <div class="col-6 offset-3 d-flex justify-content-between">
      <a class="btn btn-secondary btn-lg" href="<?= site_url('/') ?>">Cancelar</a>
      <button type="submit" class="btn btn-primary btn-lg">Adicionar</button>
    </div>
  </div>

  <?= form_close() ?>
</div>

<?= $this->include('templates/footer'); ?>