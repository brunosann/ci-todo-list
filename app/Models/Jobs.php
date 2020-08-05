<?php

namespace App\Models;

use CodeIgniter\Model;

class Jobs extends Model
{
  protected $table = 'jobs';
  protected $primaryKey = 'id_job';
  protected $returnType = 'object';
  protected $allowedFields = ['job', 'created', 'finished'];
}
