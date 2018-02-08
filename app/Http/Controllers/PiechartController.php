<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;


class PiechartController extends Controller
{
 



    public function getpiechartnew5(){
 $query4 = DB::select('call getBankWise_report ()');
 $query = DB::select('call Lead_Status_report ()');
 $query1 = DB::select('call citywise_report()');
 $query2 = DB::select('call get_teamwise_report()');
  $quer3 = DB::select('call Productwiselead("2017,2018")');

 return view('PiechartLeadStatus',['query4'=>$query4,'query'=>$query,'query1'=>$query1,'query2'=>$query2,'quer3'=>$quer3]);

	
}

     
}



     

          	


         