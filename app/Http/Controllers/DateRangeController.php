<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\ActivityExport;

class DateRangeController extends Controller
{
    //
    function index(){
    	$activity = DB::table('activity_types')->get();
    	dd($activity);
    	return view('date_range');
    }

     /**
    * @return \Illuminate\Support\Collection
    */
    public function exportExcel() 
    {
    	// $projects = DB::table('projects')
            // ->join('debts', 'projects.id', '=', 'debts.projects_id')
            // ->select('projects.*','debts.*', DB::raw('sum(total) as sum'))
            // ->groupBy('currency_list')
            // ->get();
  //   	$sheet->setMergeColumn(array(
		//     'columns' => array('A','B','C','D'),
		//     'rows' => array(
		//         array(2,3),
		//         array(5,11),
		//     )
		// ));

// 		$sheet->setMergeColumn(array(
//     'columns' => array('A','B','C','D'),
//     'rows' => array(
//         array(2,3),
//         array(5,11),
//     )
// ));
    	$data = array(
		    array('data1', 'data2'),
		    array('data3', 'data4')
		);

		$file = \Excel::create('Filename', function($excel) use($data) {

		    $excel->sheet('Sheetname', function($sheet) use($data) {

		    	$sheet->mergeCells('A1:E1');
		    	$sheet->mergeCells('A2:E2');
		        $sheet->fromArray($data);

		    });

		})->export('xls');
        // return \Excel::download($file);
    }
}
