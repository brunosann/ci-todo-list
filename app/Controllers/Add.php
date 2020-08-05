<?php

namespace App\Controllers;

use App\Models\Jobs;

class Add extends BaseController
{
  public function index()
  {
    helper('form');

    $data = [
      'site' => 'add'
    ];

    if (session()->has('erro')) {
      $data['erro'] = session('erro');
    }

    return view('adicionar', $data);
  }

  public function submit()
  {
    helper('date');

    $method = $this->request->getMethod();
    if ($method !== 'post') return redirect()->route('/');

    $validation = $this->validate(
      [
        'job' => 'required|alpha_space'
      ],
      [
        'job' => [
          'required' => '* Preencha o campo',
          'alpha_space' => '* Só permitido caracteres Alfabéticos'
        ]
      ]
    );

    if (!$validation) {
      return redirect()->back()->withInput()->with('erro', $this->validator);
    }

    $job = $this->request->getPost('job');

    $jobs = new Jobs();

    $data = [
      'job' => $job,
      'created' => date('Y/m/d H:i:s'),
    ];

    $jobs->insert($data);

    return redirect()->route('/');
  }
}
