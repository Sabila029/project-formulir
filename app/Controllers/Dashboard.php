<?php

namespace App\Controllers;
use App\Models\test_model;
use App\Models\usermodel;
use App\Models\Assessment_model;

class Dashboard extends BaseController
{
	protected $mdata;
    public function __construct()
    {
        $this->mdata = new test_model();
        $this->udata = new usermodel();
    }

    // public function index(): string
    // {
    //     return view('welcome_message');
    // }

    public function neonatus(): string
    {
        $Assessment_model = new Assessment_model();
        // $tampildata =  $this->mdata->tampildata();

        $info['pasien'] = $Assessment_model->findAll();

        return view('form/neonatus', $info);

    }

     public function neo(): string
    {
        $Assessment_model = new Assessment_model();
        // $tampildata =  $this->mdata->tampildata();

        $info['pasien'] = $Assessment_model->findAll();

        return view('pasien/neo', $info);
    }





    public function neonatus2(): string
    {
       $Assessment_model = new Assessment_model();

        $info['pasien'] = $Assessment_model->findAll();

        return view('form/neonatus2', $info);
    }

     public function neo2(): string
    {
        $Assessment_model = new Assessment_model();
        // $tampildata =  $this->mdata->tampildata();

        $info['pasien'] = $Assessment_model->findAll();

        return view('pasien/neo2', $info);
    }






    public function neonatus3(): string
    {
       $Assessment_model = new Assessment_model();

        $info['pasien'] = $Assessment_model->findAll();

        return view('form/neonatus3', $info);
    }

    public function neo3(): string
    {
       $Assessment_model = new Assessment_model();

        $info['pasien'] = $Assessment_model->findAll();

        return view('pasien/neo3', $info);
    }






    public function neonatus4(): string
    {
         $Assessment_model = new Assessment_model();

        $info['pasien'] = $Assessment_model->findAll();

        return view('form/neonatus4', $info);
    }

    public function neo4(): string
    {
       $Assessment_model = new Assessment_model();

        $info['pasien'] = $Assessment_model->findAll();

        return view('pasien/neo4', $info);
    }







    public function neonatus5(): string
    {
         $Assessment_model = new Assessment_model();

        $info['pasien'] = $Assessment_model->findAll();

        return view('form/neonatus5', $info);
    }

    public function neo5(): string
    {
       $Assessment_model = new Assessment_model();

        $info['pasien'] = $Assessment_model->findAll();

        return view('pasien/neo5', $info);
    }







    public function operasi(): string
    {
        $Assessment_model = new Assessment_model();

        $info['pasien'] = $Assessment_model->findAll();

        return view('form/operasi', $info);
    }

    public function op(): string
    {
       $Assessment_model = new Assessment_model();

        $info['pasien'] = $Assessment_model->findAll();

        return view('pasien/op', $info);
    }






    public function prepostop(): string
    {
        $Assessment_model = new Assessment_model();

        $info['pasien'] = $Assessment_model->findAll();

        return view('form/prepostop', $info);
    }

    public function prepost(): string
    {
       $Assessment_model = new Assessment_model();

        $info['pasien'] = $Assessment_model->findAll();

        return view('pasien/prepost', $info);
    }





    public function asesmen(): string
    {
         $Assessment_model = new Assessment_model();

        $info['pasien'] = $Assessment_model->findAll();

        return view('form/asesmen', $info);
    }

    public function bbl(): string
    {
       $Assessment_model = new Assessment_model();

        $info['pasien'] = $Assessment_model->findAll();

        return view('pasien/bbl', $info);
    }






      public function formulir(): string
    {
        $tampildata =  $this->mdata->tampildata();

        $info = array(
            'dataAssessmentform' => $tampildata,
        );

        return view('form/formulir', $info);
    }




    public function home(): string
    {
        $tampildata =  $this->mdata->tampildata();

        $info = array(
            'dataAssessmentform' => $tampildata,
        );

        return view('form/home', $info);
    }



     public function data(): string
    {
        $Assessment_model = new Assessment_model();
        $info['pasien'] = $Assessment_model->findAll();

        return view('form/data', $info);
    }






    public function pendaftaran(): string
    {
        $Assessment_model = new Assessment_model();
        $info['pasien'] = $Assessment_model->findAll();

        return view('form/pendaftaran', $info);
    }
    public function daftarpasien(): string
    {
       $Assessment_model = new Assessment_model();

        $info['pasien'] = $Assessment_model->findAll();

        return view('pasien/daftarpasien', $info);
    }





      public function layout(): string
    {
        $tampildata =  $this->mdata->tampildata();

        $info = array(
            'dataAssessmentform' => $tampildata,
        );

        return view('lauyout', $info);
    }





    public function form1()
    {
        // $tdata = new test_model();
        // dd($tdata->findAll());
        $data = [
            'data' => $this->mdata->getDataByValue('F1')
        ];

        // dd($data);

        return view('pasien/neo', $data);
    }


    public function form2()
    {
        // $tdata = new test_model();
        // dd($tdata->findAll());
        $data = [
            'data' => $this->mdata->getDataByValue('F2')
        ];

        // dd($data);

        return view('pasien/neo2', $data);
    }






    public function simpan()
    {
        $body = $this->request->getPost();
        $simpan['test'] =  $this->mdata->simpandata($body);
        $body_id = $this->test_model->generate_id();

        return redirect()->to('dashboard/data');
    }



    public function simpanuser()
    {
        $simpan['test'] =  $this->udata->simpanuser();

        return redirect()->to('dashboard/daftarpasien');
    }


    public function delete1($id)
    {
        $this->test_model->delete($id);
        return redirect()->to('dashboard/form1');
    }






   
}







