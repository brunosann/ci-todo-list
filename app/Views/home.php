<?= $this->include('templates/header'); ?>

<section class="container my-4">
  <div class="table-responsive">
    <table class="table table-striped">
      <thead class="thead-dark">
        <tr>
          <th>Tarefa</th>
          <th>Data de criação</th>
          <th>Data de finalização</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($jobs as $job) : ?>
          <tr>
            <td><?= $job->job ?></td>
            <td><?= $job->created ?></td>
            <td><?= $job->finished ?></td>
            <td class="d-flex">
              <?php if ($job->finished) : ?>
                <button disabled class="btn btn-success btn-sm mx-1"><i class=" fa fa-check"></i></button>
                <button disabled class="btn btn-success btn-sm mx-1"><i class=" fa fa-pencil"></i></button>
              <?php else : ?>
                <a class="btn btn-success btn-sm mx-1" href="<?= site_url('/finished/' . $job->id_job) ?>"><i class="fa fa-check"></i></a>
                <a class="btn btn-success btn-sm mx-1" href="<?= site_url('/edit/' . $job->id_job) ?>"><i class="fa fa-pencil"></i></a>
              <?php endif ?>
              <a class="btn btn-danger btn-sm mx-1" href="<?= site_url('/delete/' . $job->id_job) ?>"><i class="fa  fa-trash"></i></a>
            </td>
          </tr>
        <?php endforeach ?>

      </tbody>
    </table>
  </div>
</section>

<?= $this->include('templates/footer'); ?>