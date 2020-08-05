<?php

namespace App\Controllers;

use App\Models\Jobs;

class Finished extends BaseController
{
  public function finish($id)
  {
    $jobs = new Jobs();

    $data = [
      'finished' => date('Y/m/d H:i:s')
    ];

    $jobs->update($id, $data);

    return redirect()->route('/');
  }
}
