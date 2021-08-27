<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Charts\Homechart;

class HomeController extends Controller
{
      function index(Request $request){

       
        $chart = new Homechart;
    

        $chart->labels(['จอดดับเครื่อง','จอดไม่ดับเครื่อง','วิ่งปกติ','	ความเร็วเกิน','ไฟกล่องดำ','ไม่อัพเดท','จอดนานเกินชั่วโมง']);

        $chart->dataset('aaa','pie',[10,8,4,0,1,14,52])->options([
          'backgroundColor' => ['gray','yellow','green','pink','blue','red','lightpink'],
        
        ]);

      
       return view('webpage.home.index',compact('chart'));
         
      }
      
}
