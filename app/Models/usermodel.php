<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;


class usermodel extends Model{


	protected $db;
    protected $request;
    protected $table = 'pasien' ;
    protected $allowedFields = ['NO_REGISTRATION', 'THENAME', 'DATE_OF_BIRTH', 'GENDER', 'ADDRESS'];
    protected $primaryKey = 'NO_REGISTRATION';



    // public function __construct()
    // {
    //     $this->db = \Config\Database::connect();
    //     $this->request = \Config\Services::request();
    // }




    public function simpanuser()
    {


        $NO_REGISTRATION = $this->request->getPost('NO_REGISTRATION');
        $THENAME = $this->request->getPost('THENAME');
        $DATE_OF_BIRTH = $this->request->getPost('DATE_OF_BIRTH');
        $GENDER = $this->request->getPost('GENDER');
        $ADDRESS = $this->request->getPost('ADDRESS');


         $sql = "INSERT into PASIEN (NO_REGISTRATION, THENAME, DATE_OF_BIRTH, GENDER, ADDRESS)

                VALUES ('$NO_REGISTRATION', '$THENAME', '$DATE_OF_BIRTH', '$GENDER', '$ADDRESS')";



         $this->db->query($sql);

        return;
        
    }



    public function hapusdata($NO_REGISTRATION) {
        return $this->delete($NO_REGISTRATION);
    }



    // public function get_keyword($keyword){
    //     $this->db->select('*');
    //     $this->db->from('pasien');
    //     $this->db->like('NO_REGISTRATION', $keyword);
    //     $this->db->like('THENAME', $keyword);
    //     $this->db->like('DATE_OF_BIRTH', $keyword);
    //     $this->db->like('GENDER', $keyword);
    //     $this->db->like('ADDRESS', $keyword);

    //     return $this->db->get()->result();
    // }





}