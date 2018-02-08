<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;


class PiechartController extends Controller
{
 public function getpiechart(){
 $bank = DB::select('call getBankWise_report ()');
 $city = DB::select('call citywise_report()');
 $team = DB::select('call get_teamwise_report()');
 $chart_data = DB::select('call Productwiselead("2017,2018")');

 return view('PiechartLeadStatus',['bank'=>$bank,'city'=>$city,'team'=>$team,'chart_data'=>$chart_data]);

	
}

     
}



     

          	


         