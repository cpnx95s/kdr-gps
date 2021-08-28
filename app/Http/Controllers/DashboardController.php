<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Charts\Homechart;
class DashboardController extends Controller
{
    function index(){

        
       
        $chart = new Homechart;
        $chart->labels(['จอดดับเครื่อง','จอดติดเครื่อง','รถวิ่ง']);
        $chart->dataset('aaa','pie',[10,8,4])->options([
          'backgroundColor' => ['red','yellow','lawngreen'],  
        ]);

        $chart2 = new Homechart;
        $chart2->labels(['ทะเบียน1','ทะเบียน2','ทะเบียน3','ทะเบียน4','ทะเบียน5','ทะเบียน6','ทะเบียน7','ทะเบียน8','ทะเบียน9','ทะเบียน10']);
        $chart2->dataset('ความเร็วเกิน(ครั้ง)','bar',[10,8,4,3,1,0,0,0,0,0])->options([
          'backgroundColor' => ['red','red','red',],  
        ]);

        $chart3 = new Homechart;
        $chart3->labels(['ใช้ความเร็วเกิน','ใช้ความเร็วปกติ','รถจอด']);
        $chart3->dataset('aaa','pie',[2,5,10])->options([
          'backgroundColor' => ['red','lawngreen'],  
        ]);


        $chart4 = new Homechart;
        $chart4->labels(['ทะเบียน1','ทะเบียน2','ทะเบียน3','ทะเบียน4','ทะเบียน5','ทะเบียน6','ทะเบียน7','ทะเบียน8','ทะเบียน9','ทะเบียน10']);
        $chart4->dataset('เวลา','bar',[01.48,01.15,0.5,0.25,0.12,0,0,0,0,0])->options([
          'backgroundColor' => ['yellow','yellow','yellow',],  
        ]);

        return view('webpage.dashboard.index',compact('chart','chart2','chart3','chart4'));
       }
     
}
