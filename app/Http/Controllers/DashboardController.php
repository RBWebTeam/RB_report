<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;


class DashboardController extends Controller
{


public function cartdashboard(Request $req)
{


   return view('lead-status-report');

}

public function getpiechartdata(Request $req){

 
   // $data=array('empCode' =>'RB40000009' );

   $data=array('empCode' =>$req->empCode);

  // if(isset($req->emp_code)){
  
     
       $dt=json_encode($data);

  $result=$this->call_json_data_api("http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/dsplyCitywiseLeadReport",$dt);
  
             $http_result=$result['http_result'];
             $error=$result['error'];


 
              if($http_result){
                return $http_result;
              }else{

                 return 0;
              }
 
//return view ('lead-status-report-test');
}


public function call_json_data_api($url,$data){
	 $ch = curl_init();
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FAILONERROR, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
        $http_result = curl_exec($ch);
        $error = curl_error($ch);
        $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
        curl_close($ch);
        $result=array('http_result' =>$http_result ,'error'=>$error );

        return $result;
		 
	}


public function getpiechartdata1(Request $req){

 
   // $data=array('empCode' =>'RB40000009' );
     $data=array('empCode' =>$req->empCode);

  // if(isset($req->emp_code)){
  
     
       $dt=json_encode($data);

  $result=$this->call_json_data_get_api("http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/dsplyBankwiseLeadReport",$dt);
  
             $http_result=$result['http_result'];
             $error=$result['error'];


 
              if($http_result){
                return $http_result;
              }else{

                 return 0;
              }
 
//return view ('lead-status-report-test');
}


public function call_json_data_get_api($url,$data){
   $ch = curl_init();
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FAILONERROR, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
        $http_result = curl_exec($ch);
        $error = curl_error($ch);
        $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
        curl_close($ch);
        $result=array('http_result' =>$http_result ,'error'=>$error );

        return $result;
     
  }

  public function getpiechartdata2(Request $req){
 //if(isset($req->emp_code)){

    
 
   $data=array('empCode' =>$req->empCode);


  // if(isset($req->emp_code)){
  
     
       $dt=json_encode($data);

  $result=$this->call_json_post_api("http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/dsplyTeamwiseLeadReport",$dt);
  
             $http_result=$result['http_result'];
             $error=$result['error'];


 
              if($http_result){
                return $http_result;
              }else{

                 return 0;
              }
 
//return view ('lead-status-report-test');
}


public function call_json_post_api($url,$data){
   $ch = curl_init();
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FAILONERROR, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
        $http_result = curl_exec($ch);
        $error = curl_error($ch);
        $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
        curl_close($ch);
        $result=array('http_result' =>$http_result ,'error'=>$error );

        return $result;
     
  }
  
   public function getpiechartdata3(Request $req){

    $data=array('empCode' =>$req->empCode);

   // $data=array('empCode' =>'RB40000009' );
  // if(isset($req->emp_code)){
  
     
       $dt=json_encode($data);

  $result=$this->call_json_api("http://beta.services.rupeeboss.com/LoginDtls.svc/xmlservice/dsplyProductwiseLeadReport",$dt);
  
             $http_result=$result['http_result'];
             $error=$result['error'];


 
              if($http_result){
                return $http_result;
              }else{

                 return 0;
              }
 
//return view ('lead-status-report-test');
}


public function call_json_api($url,$data){
   $ch = curl_init();
        curl_setopt($ch, CURLOPT_VERBOSE, 1);
        curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_FAILONERROR, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
        $http_result = curl_exec($ch);
        $error = curl_error($ch);
        $http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
        curl_close($ch);
        $result=array('http_result' =>$http_result ,'error'=>$error );

        return $result;
     
  }
  
  
  
}

  
  








