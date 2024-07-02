<?php

namespace App\Models;

use CodeIgniter\Model;

class DataTpsModel extends Model
{
    protected $table = 'datatps';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'no_tps', 'dapil', 'kelurahan', 'kecamatan', 'jml_l','jml_p','jml_lp', 'meliputi', 'rt', 'rw', 'ciri', 'long', 'lat', 'multipleImage','created', 'updated'
    ];
    protected $useTimestamps = true;
    protected $createdField  = 'created';
    protected $updatedField  = 'updated';
}
