<?php

namespace App\Http\Controllers;

use App\Charts\Homechart;
use Illuminate\Http\Request;

class ReportController extends Controller
{
  function index()
  {

    return view('webpage.report.index');
  }
  function vtreport()
  {

    return view('webpage.report.vtreport');
  }
  function streport()
  {

    return view('webpage.report.streport');
  }

  function swcard()
  {

    return view('webpage.report.swcard');
  }

  function remind()
  {

    return view('webpage.report.remind');
  }

  function conclude()
  {

    return view('webpage.report.conclude');
  }

  function oilspgraph()
  {
    $chart = new Homechart;


    $chart->labels([
      '00.05 13ส.ค.64', '00.25 13ส.ค.64', '01.05 13ส.ค.64', '02.05 13ส.ค.64', '03.05 13ส.ค.64', '04.15 13ส.ค.64', '06.05 13ส.ค.64',
      '07.05 13ส.ค.64', '08.25 13ส.ค.64', '08.55 13ส.ค.64', '09.15 13ส.ค.64', '09.25 13ส.ค.64', '10.15 13ส.ค.64', '10.07 13ส.ค.64',
      '10.85 13ส.ค.64', '11.05 13ส.ค.64', '11.75 13ส.ค.64', '12.05 13ส.ค.64', '13.05 13ส.ค.64', '14.25 13ส.ค.64', '14.35 13ส.ค.64',
      '14.45 13ส.ค.64', '14.55 13ส.ค.64',
    ]);
    $chart->dataset('ความเร็ว', 'line', [
      75, 90, 92, 90, 89, 72, 82,
      88, 90, 92, 90, 89, 72, 82,
      0, 0, 0, 10, 0, 0, 0,
      0, 0, 0, 0, 0, 0, 0,
      0, 0, 0, 0, 0, 0, 0
    ])->options([
      'borderColor' => ['brown'],

    ]);
    $chart->dataset('น้ำมัน', 'line', [
      80, 80, 80, 80, 80, 80, 80,
      80, 80, 80, 80, 100, 80, 80,
      80, 80, 80, 80, 80, 80, 80,
      80, 80, 80, 80, 80, 80, 80,
      80, 80, 80, 80, 80, 80, 80,
    ])->options([
      'backgroundColor' => ['skyblue'],
    ]);


    return view('webpage.report.oilspgraph', compact('chart', $chart));
  }
}
