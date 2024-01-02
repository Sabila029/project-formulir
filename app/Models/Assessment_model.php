<?php

namespace App\Models;

use CodeIgniter\Model;

class Assessment_model extends Model
{
	protected $table = "pasien";
	protected $allowedFields = ['NO_REGISTRATION', 'THENAME', 'DATE_OF_BIRTH', 'GENDER', 'ADDRESS'];
	protected $primaryKey = "NO_REGISTRATION";
	protected $useTimestamps = true;
    public function tampildata()
    {
        $query = $this->db->query("SELECT * FROM pasien");

        return $query->getResult();
    }
}