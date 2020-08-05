<?php

namespace App\Controllers;

use App\Models\Jobs;

class Delete extends BaseController
{
  public function delete($id = -1)
  {
    $jobs = new Jobs();
    $jobs->delete($id);
    return redirect()->route('/');
  }
}
