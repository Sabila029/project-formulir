<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\HTTP\Request;

class test_model extends Model
{
    protected $db;
    protected $request;
    protected $table = 'assessment_info' ;
    protected $allowedFields = [
                                'FORM', 'BODY_ID', 'ORG_UNIT_CODE', 'PASIEN_DIAGNOSA_ID', 'DIAGNOSA_ID', 'NO_REGISTRATION', 'VISIT_ID', 'BILL_ID', 
                                'CLINIC_ID', 'CLASS_ROOM_ID', 'BED_ID', 'IN_DATE', 'EXIT_DATE', 'KELUAR_ID', 'EXAMINATION_DATE', 'TEMPERATURE', 
                                'TENSION_UPPER', 'TENSION_BELOW', 'NADI', 'NAFAS', 'WEIGHT', 'HEIGHT' , 'ARM_DIAMETER', 'ANAMNASE', 'PEMERIKSAAN', 
                                'TERAPHY_DESC', 'INSTRUCTION', 'MEDICAL_TREATMENT', 'EMPLOYEE_ID', 'DESCRIPTION', 'MODIFIED_DATE' ,'MODIFIED_BY', 
                                'MODIFIED_FROM', 'STATUS_PASIEN_ID', 'AGEYEAR', 'AGEMONTH', 'AGEDAY', 'THENAME', 'THEADDRESS', 'THEID' , 'ISRJ', 
                                'GENDER', 'DOCTOR', 'KAL_ID', 'PETUGAS_ID', 'PETUGAS', 'ACCOUNT_ID', 'SATURASI', 'ALLOANAMNESIS_CONTACT', 
                                'ALLOANAMNESIS_RESULT', 'ALLOANAMNESIS_HUB', 'DIAGNOSA_DESC', 'DIAGNOSA_HISTORY', 'DIAGNOSA_KERJA', 'DIAGNOSA_BANDING', 
                                'RIWAYAT_OBAT', 'RIWAYAT_ALERGI', 'ASSESSMENT_TYPE', 'treat_image', 'TTD', 'TTD_1', 'TTD_2', 'LOKALIS', 
                                'ALLOANAMNESIS_ADDRESS', 'ALLOANAMNESIS_SEX','ALLOANAMNESIS_AGE', 'EDUCATION_DATE',
                                'v_01', 'v_02', 'v_03', 'v_04', 'v_05', 'v_06', 'v_07', 'v_08', 'v_09', 'v_10', 
                                'v_11', 'v_12', 'v_13', 'v_14', 'v_15', 'v_16', 'v_17', 'v_18', 'v_19', 'v_20', 
                                'v_21', 'v_22', 'v_23', 'v_24', 'v_25', 'v_26', 'v_27', 'v_28', 'v_29', 'v_30', 
                                'v_31', 'v_32', 'v_33', 'v_34', 'v_35', 'v_36', 'v_37', 'v_38', 'v_39', 'v_40', 
                                'v_41', 'v_42', 'v_43', 'v_44', 'v_45', 'v_46', 'v_47', 'v_48', 'v_49', 'v_50',
                                'v_51', 'v_52', 'v_53', 'v_54', 'v_55', 'v_56', 'v_57', 'v_58', 'v_59', 'v_60',
                                'v_61', 'v_62', 'v_63', 'v_64', 'v_65', 'v_66', 'v_67', 'v_68', 'v_69', 'v_70',
                                'v_71', 'v_72', 'v_73', 'v_74', 'v_75', 'v_76', 'v_77', 'v_78', 'v_79', 'v_80',
                                'v_81', 'v_82', 'v_83', 'v_84', 'v_85', 'v_86', 'v_87', 'v_88', 'v_89', 'v_90',
                                'v_91', 'v_92', 'v_93', 'v_94', 'v_95', 'v_96', 'v_97', 'v_98', 'v_99', 'v_100',

                                't_01', 't_02', 't_03', 't_04', 't_05', 't_06', 't_07', 't_08', 't_09', 't_010', 
                                't_011', 't_012', 't_013', 't_014', 't_015', 't_016', 't_017', 't_018', 't_019', 't_020', 
                                't_021', 't_022', 't_023', 't_024', 't_025', 't_026', 't_027', 't_028', 't_029', 't_030', 
                                't_031', 't_032', 't_033', 't_034', 't_035', 't_036', 't_037', 't_038', 't_039', 't_040', 
                                't_041', 't_042', 't_043', 't_044', 't_045', 't_046', 't_047', 't_048', 't_049', 't_050',
                                't_051', 't_052', 't_053', 't_054', 't_055', 't_056', 't_057', 't_058', 't_059', 't_060',
                                't_061', 't_062', 't_063', 't_064', 't_065', 't_066', 't_067', 't_068', 't_069', 't_070',
                                't_071', 't_072', 't_073', 't_074', 't_075', 't_076', 't_077', 't_078', 't_079', 't_080',
                                't_081', 't_082', 't_083', 't_084', 't_085', 't_086', 't_087', 't_088', 't_089', 't_090',
                                't_091', 't_092', 't_093', 't_094', 't_095', 't_096', 't_097', 't_098', 't_099', 't_100'
                            ];



    // public function __construct()
    // {
    //     $this->db = \Config\Database::connect();
    //     $this->request = \Config\Services::request();
    // }

    // public function __construct()
    // {
    //     $FORM = $body('FORM');



    public function tampildata()
    {
        $query = $this->db->query("SELECT * FROM pasien");

        return $query->getResult();
    }

    public function simpandata($body)
    {
        // dd($body['FORM']);
        $FORM = $body('FORM');
        $BODY_ID = $body('BODY_ID');
        $ORG_UNIT_CODE = $body('ORG_UNIT_CODE');
        $PASIEN_DIAGNOSA_ID = $body('PASIEN_DIAGNOSA_ID');
        $DIAGNOSA_ID = $body('DIAGNOSA_ID');
        $NO_REGISTRATION = $body('NO_REGISTRATION');
        $VISIT_ID = $body('VISIT_ID');
        $BILL_ID = $body('BILL_ID');
        $CLINIC_ID = $body('CLINIC_ID');
        $CLASS_ROOM_ID = $body('CLASS_ROOM_ID');
        $BED_ID = $body('BED_ID');
        $IN_DATE = $body('IN_DATE');
        $EXIT_DATE = $body('EXIT_DATE');
        $KELUAR_ID = $body('KELUAR_ID');
        $EXAMINATION_DATE = $body('EXAMINATION_DATE');
        $TEMPERATURE = $body('TEMPERATURE');
        $TENSION_UPPER = $body('TENSION_UPPER');
        $TENSION_BELOW = $body('TENSION_BELOW');
        $NADI = $body('NADI');
        $NAFAS = $body('NAFAS');
        $WEIGHT = $body('WEIGHT');
        $HEIGHT = $body('HEIGHT');
        $ARM_DIAMETER = $body('ARM_DIAMETER');
        $ANAMNASE = $body('ANAMNASE');
        $PEMERIKSAAN = $body('PEMERIKSAAN');
        $TERAPHY_DESC = $body('TERAPHY_DESC');
        $INSTRUCTION = $body('INSTRUCTION');
        $MEDICAL_TREATMENT = $body('MEDICAL_TREATMENT');
        $EMPLOYEE_ID = $body('EMPLOYEE_ID');
        $DESCRIPTION = $body('DESCRIPTION');
        $MODIFIED_DATE = $body('MODIFIED_DATE');
        $MODIFIED_BY = $body('MODIFIED_BY');
        $MODIFIED_FROM = $body('MODIFIED_FROM');
        $STATUS_PASIEN_ID = $body('STATUS_PASIEN_ID');
        $AGEYEAR = $body('AGEYEAR');
        $AGEMONTH = $body('AGEMONTH');
        $AGEDAY = $body('AGEDAY');
        $THENAME = $body('THENAME');
        $THEADDRESS = $body('THEADDRESS');
        $THEID = $body('THEID');
        $ISRJ = $body('ISRJ');
        $GENDER = $body('GENDER');
        $DOCTOR = $body('DOCTOR');
        $KAL_ID = $body('KAL_ID');
        $PETUGAS_ID = $body('PETUGAS_ID');
        $PETUGAS = $body('PETUGAS');
        $ACCOUNT_ID = $body('ACCOUNT_ID');
        $SATURASI = $body('SATURASI');
        $ALLOANAMNESIS_CONTACT = $body('ALLOANAMNESIS_CONTACT');
        $ALLOANAMNESIS_RESULT = $body('ALLOANAMNESIS_RESULT');
        $ALLOANAMNESIS_HUB = $body('ALLOANAMNESIS_HUB');
        $DIAGNOSA_DESC = $body('DIAGNOSA_DESC');
        $DIAGNOSA_HISTORY = $body('DIAGNOSA_HISTORY');
        $DIAGNOSA_KERJA = $body('DIAGNOSA_KERJA');
        $DIAGNOSA_BANDING = $body('DIAGNOSA_BANDING');
        $RIWAYAT_OBAT = $body('RIWAYAT_OBAT');
        $RIWAYAT_ALERGI = $body('RIWAYAT_ALERGI');
        $ASSESSMENT_TYPE = $body('ASSESSMENT_TYPE');
        $treat_image = $body('treat_image');
        $TTD = $body('TTD');
        $TTD_1 = $body('TTD_1');
        $TTD_2 = $body('TTD_2');
        $LOKALIS = $body('LOKALIS');
        $ALLOANAMNESIS_ADDRESS = $body('ALLOANAMNESIS_ADDRESS');
        $ALLOANAMNESIS_SEX = $body('ALLOANAMNESIS_SEX');
        $ALLOANAMNESIS_AGE = $body('ALLOANAMNESIS_AGE');
        $EDUCATION_DATE = $body('EDUCATION_DATE');
        $v_01 = $body('v_01');
        $v_02 = $body('v_02');
        $v_03 = $body('v_03');
        $v_04 = $body('v_04');
        $v_05 = $body('v_05');
        $v_06 = $body('v_06');
        $v_07 = $body('v_07');
        $v_08 = $body('v_08');
        $v_09 = $body('v_09');
        $v_10 = $body('v_10');
        $v_11 = $body('v_11');
        $v_12 = $body('v_12');
        $v_13 = $body('v_13');                                 
        $v_14 = $body('v_14');
        $v_15 = $body('v_15');
        $v_16 = $body('v_16');
        $v_17 = $body('v_17');
        $v_18 = $body('v_18');
        $v_19 = $body('v_19');
        $v_20 = $body('v_20');
        $v_21 = $body('v_21');
        $v_22 = $body('v_22');
        $v_23 = $body('v_23');
        $v_24 = $body('v_24');
        $v_25 = $body('v_25');
        $v_26 = $body('v_26');
        $v_27 = $body('v_27');
        $v_28 = $body('v_28');
        $v_29 = $body('v_29');
        $v_30 = $body('v_30');
        $v_31 = $body('v_31');
        $v_32 = $body('v_32');
        $v_33 = $body('v_33');
        $v_34 = $body('v_34');
        $v_35 = $body('v_35');
        $v_36 = $body('v_36');
        $v_37 = $body('v_37');
        $v_38 = $body('v_38');
        $v_39 = $body('v_39');
        $v_40 = $body('v_40');
        $v_41 = $body('v_41');
        $v_42 = $body('v_42');
        $v_43 = $body('v_43');
        $v_44 = $body('v_44');
        $v_45 = $body('v_45');
        $v_46 = $body('v_46');
        $v_47 = $body('v_47');
        $v_48 = $body('v_48');
        $v_49 = $body('v_49');
        $v_50 = $body('v_50');
        $v_51 = $body('v_51');
        $v_52 = $body('v_52');
        $v_53 = $body('v_53');
        $v_54 = $body('v_54');
        $v_55 = $body('v_55');
        $v_56 = $body('v_56');
        $v_57 = $body('v_57');
        $v_58 = $body('v_58');
        $v_59 = $body('v_59');
        $v_60 = $body('v_60');
        $v_61 = $body('v_61');
        $v_62 = $body('v_62');
        $v_63 = $body('v_63');
        $v_64 = $body('v_64');
        $v_65 = $body('v_65');
        $v_66 = $body('v_66');
        $v_67 = $body('v_67');
        $v_68 = $body('v_68');
        $v_69 = $body('v_69');
        $v_70 = $body('v_70');
        $v_71 = $body('v_71');
        $v_72 = $body('v_72');
        $v_73 = $body('v_73');
        $v_74 = $body('v_74');
        $v_75 = $body('v_75');
        $v_76 = $body('v_76');
        $v_77 = $body('v_77');
        $v_78 = $body('v_78');
        $v_79 = $body('v_79');
        $v_80 = $body('v_80');
        $v_81 = $body('v_81');
        $v_82 = $body('v_82');
        $v_83 = $body('v_83');
        $v_84 = $body('v_84');
        $v_85 = $body('v_85');
        $v_86 = $body('v_86');
        $v_87 = $body('v_87');
        $v_88 = $body('v_88');
        $v_89 = $body('v_89');
        $v_90 = $body('v_90');
        $v_91 = $body('v_91');
        $v_92 = $body('v_92');
        $v_93 = $body('v_93');
        $v_94 = $body('v_94');
        $v_95 = $body('v_95');
        $v_96 = $body('v_96');
        $v_97 = $body('v_97');
        $v_98 = $body('v_98');
        $v_99 = $body('v_99');
        $v_100 = $body('v_100');
        $t_01 = $body('t_01');
        $t_02 = $body('t_02');
        $t_03 = $body('t_03');
        $t_04 = $body('t_04');
        $t_05 = $body('t_05');
        $t_06 = $body('t_06');
        $t_07 = $body('t_07');
        $t_08 = $body('t_08');
        $t_09 = $body('t_09');
        $t_010 = $body('t_010');
        $t_011 = $body('t_011');
        $t_012 = $body('t_012');
        $t_013 = $body('t_013');
        $t_014 = $body('t_014');
        $t_015 = $body('t_015');
        $t_016 = $body('t_016');
        $t_017 = $body('t_017');
        $t_018 = $body('t_018');
        $t_019 = $body('t_019');
        $t_020 = $body('t_020');
        $t_021 = $body('t_021');
        $t_022 = $body('t_022');
        $t_023 = $body('t_023');
        $t_024 = $body('t_024');
        $t_025 = $body('t_025');
        $t_026 = $body('t_026');
        $t_027 = $body('t_027');
        $t_028 = $body('t_028');
        $t_029 = $body('t_029');
        $t_030 = $body('t_030');
        $t_031 = $body('t_031');
        $t_032 = $body('t_032');
        $t_033 = $body('t_033');
        $t_034 = $body('t_034');
        $t_035 = $body('t_035');
        $t_036 = $body('t_036');
        $t_037 = $body('t_037');
        $t_038 = $body('t_038');
        $t_039 = $body('t_039');
        $t_040 = $body('t_040');
        $t_041 = $body('t_041');
        $t_042 = $body('t_042');
        $t_043 = $body('t_043');
        $t_044 = $body('t_044');
        $t_045 = $body('t_045');
        $t_046 = $body('t_046');
        $t_047 = $body('t_047');
        $t_048 = $body('t_048');
        $t_049 = $body('t_049');
        $t_050 = $body('t_050');
        $t_051 = $body('t_051');
        $t_052 = $body('t_052');
        $t_053 = $body('t_053');
        $t_054 = $body('t_054');
        $t_055 = $body('t_055');
        $t_056 = $body('t_056');
        $t_057 = $body('t_057');
        $t_058 = $body('t_058');
        $t_059 = $body('t_059');
        $t_060 = $body('t_060');
        $t_061 = $body('t_061');
        $t_062 = $body('t_062');
        $t_063 = $body('t_063');
        $t_064 = $body('t_064');
        $t_065 = $body('t_065');
        $t_066 = $body('t_066');
        $t_067 = $body('t_067');
        $t_068 = $body('t_068');
        $t_069 = $body('t_069');
        $t_070 = $body('t_070');
        $t_071 = $body('t_071');
        $t_072 = $body('t_072');
        $t_073 = $body('t_073');
        $t_074 = $body('t_074');
        $t_075 = $body('t_075');
        $t_076 = $body('t_076');
        $t_077 = $body('t_077');
        $t_078 = $body('t_078');
        $t_079 = $body('t_079');
        $t_080 = $body('t_080');
        $t_081 = $body('t_081');
        $t_082 = $body('t_082');
        $t_083 = $body('t_083');
        $t_084 = $body('t_084');
        $t_085 = $body('t_085');
        $t_086 = $body('t_086');
        $t_087 = $body('t_087');
        $t_088 = $body('t_088');
        $t_089 = $body('t_089');
        $t_090 = $body('t_090');
        $t_091 = $body('t_091');
        $t_092 = $body('t_092');
        $t_093 = $body('t_093');
        $t_094 = $body('t_094');
        $t_095 = $body('t_095');
        $t_096 = $body('t_096');
        $t_097 = $body('t_097');
        $t_098 = $body('t_098');
        $t_099 = $body('t_099');
        $t_100 = $body('t_100');

        return;
        
    }


    // public function __construct()
    // {
    //     $this->db = \Config\Database::connect();
    //     $this->request = \Config\Services::request();
    // }



    public function getDataByValue($value)
    {
        return $this->where('form', $value)->findAll();
    }




    // public function tampildataform1()
    // {

    //     $sql = "SELECT pasien.DATE_OF_BIRTH, assessment_info.NO_REGISTRATION, assessment_info.THENAME, assessment_info.THEADDRESS, assessment_info.GENDER,
    //    FROM pasien
    //    INNER JOIN assessment_info
    //    ON pasien.NO_REGISTRATION = assessment_info.NO_REGISTRATION
    //    WHERE assessment_info.FORM = 'F1'";

    //     $query = $this->db->query($sql);

    //     //uraikan hasil query dalam bentuk array
    //     $hasil = $query->getResult();

    //     return $hasil;
    // }


}




