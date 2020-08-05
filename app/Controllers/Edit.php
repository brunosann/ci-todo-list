<?php

namespace App\Controllers;

use App\Models\Jobs;

class Edit extends BaseController
{
  public function index($id)
  {
    helper('form');
    $data['site'] = 'edit';

    $jobs = new Jobs();
    $data['job'] = $jobs->find($id);

    return view('editar', $data);
  }

  public function editSubmit()
  {
    $job = $this->request->getPost('job');
    $id = $this->request->getPost('id_job');

    $validation = $this->validate([
      'job' => 'required',
      'id_job' => 'required'
    ]);

    if (!$validation) {
      return redirect()->to(site_url('/edit/' . $id));
    }

    $jobs = new Jobs();

    $data = [
      'job' => $job
    ];

    $jobs->update($id, $data);

    return redirect()->route('/');
  }
}
