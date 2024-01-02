<?php


namespace App\Controllers\Api;

use App\Models\Assessment_model;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;


class databiodata extends ResourceController
{
	use ResponseTrait;

	public function show($NO_REGISTRATION = null)
	{
		$Assessment_model = new Assessment_model();
		$data = $Assessment_model->find($NO_REGISTRATION);
                                                                                                                                                                                                                                                                                                                                                                                                                  
		return $this->respond($data);
	}
	public function index(){
		return json_encode('asfd');
	}
}