<?php

namespace App\Controllers;

class Home extends BaseController
{
  protected $helpers = array('date', 'matematica_helper');

  public function index()
  {
    $data = [];
    if (session()->has('erro')) {
      $data['erro'] = session('erro');
    }

    helper('form');
    return view('home', $data);
  }

  public function submit()
  {
    $method = $this->request->getMethod();
    if ($method !== 'post') {
      return redirect()->to(site_url('home'));
    }

    $validacao = $this->validate(
      [
        'user' => 'required|alpha',
        'senha' => 'required|min_length[2]'
      ],
      [
        'user' => [
          'required' => 'Usuario: Campo é obrigatório',
          'alpha' => 'Usuario: Só é permetido caracteries alfabeticos'
        ],
        'senha' => [
          'required' => 'Senha: campo obrigatório'
        ]
      ]
    );



    if (!$validacao) {
      return redirect()->back()->withInput()->with('erro', $this->validator);
    }
    echo 'Passou';
  }
}
?>

//=================================================================================================================

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css') ?>">
  <title>Pagina</title>
</head>

<body class="container">
  <h1>Validações</h1>
  <?= form_open('home/submit') ?>
  <div class="form-group">
    <label for="">Usuario</label>
    <input class="form-control" type="text" name="user" value="<?= old('user') ?>">
  </div>
  <div class="form-group">
    <label for="">Sobre</label>
    <input class="form-control" type="text" name="senha" value="<?= old('senha') ?>">
  </div>
  <button class="btn btn-primary" type="submit">Enviar</button>
  <?= form_close() ?>

  <?php if (isset($erro)) : ?>
    <p><?= $erro->listErrors() ?></p>
  <?php endif ?>
</body>

</html>