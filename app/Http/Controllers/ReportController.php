<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    function index(){

       return view('webpage.report.index');
         
      }
      function vtreport (){

        return view('webpage.report.vtreport');
      
      }
      function streport (){

        return view('webpage.report.streport');
      
      } 
      
      function swcard (){

        return view('webpage.report.swcard');
      
      } 
      
      function remind (){

        return view('webpage.report.remind');
      
      } 
      
      function conclude (){

        return view('webpage.report.conclude');
      
      } 
      
      function oilspgraph (){

        return view('webpage.report.oilspgraph');
      
      }   
 }