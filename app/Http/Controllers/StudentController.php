<?php
//namespace of the controller
namespace App\Http\Controllers;

//imported classess
use App\Webservice\Curl;
use App\Http\Controllers\Controller as BaseController;

 
class TeacherController extends BaseController{
    protected $curl;
    protected $service_name;
    
    public function __construct() {
        $this->service_name = "studentservice";
    }
    
    public function get($start = 0, $limit = 0){
        //initialize curl
        $this->curl = new Curl();
        $this->curl->post( SERVICE_PATH. $this->service_name. "/getallstudents");
        //return view
        return view('student', ['result' => $this->curl->response]);
    }
    
}
