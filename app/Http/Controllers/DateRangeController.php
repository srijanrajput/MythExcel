<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\ActivityExport;
use App\Exports\MonthlyReportExport;
use Maatwebsite\Excel\Concerns\FromView;

class DateRangeController extends Controller
{
    //
    function index(){

    	// DB::enableQueryLog();
    	//  $projects = DB::table('all_activity_log')
    	//  	// ->count(case when type = 'SMS' then 1 else null end)  as 'SMS',
     //        // ->join('debts', 'projects.id', '=', 'debts.projects_id')
     //        // ->select('projects.*','debts.*', DB::raw('sum(total) as sum'))
     //        ->select('user', 
     //        	DB::raw('count(distinct case_id) as File_Count'),
     //        	DB::raw('count(case when type = "Email" then 1 else null end) as "Email"'),
     //        	DB::raw('count(case when type = "SMS" then 1 else null end)  as "SMS"'),
     //        	DB::raw('count(case when type = "Notes" then 1 else null end)  as "Notes"'),
     //        	DB::raw('count(case when type = "Status Changes" then 1 else null end)  as "Status Changes"'),
     //        	DB::raw('count(case when type = "Debts" then 1 else null end)  as "Debts"')
     //        )
     //        ->groupBy('user')
     //        ->where('created_at', '>=', .' 00:00:00'));
     //        ->get();

     //        dd($projects);
    	// $activity = DB::table('activity_types')->get();
    	// dd($activity);
    	return view('date_range');
    }

    //
    public function date(Request $request){
    	$fromDate = "";
    	$toDate = "";
    	if ($request->has('from_date')) {
		    $fromDate = $request->input('from_date'). ' 00:00:00';
		}

		if ($request->has('to_date')) {
		    $toDate = $request->input('to_date'). ' 00:00:00';

		}

		if($fromDate != "" && $toDate != ""){
		// DB::enableQueryLog();

    	 $projects = DB::table('all_activity')
    	 	// ->count(case when type = 'SMS' then 1 else null end)  as 'SMS',
            // ->join('debts', 'projects.id', '=', 'debts.projects_id')
            // ->select('projects.*','debts.*', DB::raw('sum(total) as sum'))
            ->select('user', 
            	DB::raw('count(distinct case_id) as File_Count'),
            	DB::raw('count(case when type = "Email" then 1 else null end) as "Email"'),
            	DB::raw('count(case when type = "SMS" then 1 else null end)  as "SMS"'),
            	DB::raw('count(case when type = "Notes" then 1 else null end)  as "Notes"'),
            	DB::raw('count(case when type = "Status Changes" then 1 else null end)  as "Status Changes"'),
            	DB::raw('count(case when type = "Debts" then 1 else null end)  as "Debts"')
            )
            ->groupBy('user')
            ->where('created', '<=', $toDate)
            ->where('created', '>=', $fromDate)
            ->get();
// dd(DB::getQueryLog());
            dd($projects);
        }
    	return view('monthlyreport');
    }

    public function view()
    {
        return view('exports.invoices', [
            'invoices' => Invoice::all()
        ]);
    }

    public function monthlyreport(Request $request){
    	 // $fromDate = $request->input('from_date') ?? Carbon::today();
        // $toDate = $request->input('to_date') ?? Carbon::today()->addYears(100);
    	if ($request->has('from_date')) {
    		dd($request->input('from_date'));
		    $user = $user->where('date_of_visit', '>=', $fromDate);
		}

		if ($request->has('to_date')) {
		   $user =  $user->where('date_of_visit', '<=', $toDate);
		}


		 $projects = DB::table('all_activity')
            // ->join('debts', 'projects.id', '=', 'debts.projects_id')
            // ->select('projects.*','debts.*', DB::raw('sum(total) as sum'))
            // ->groupBy('currency_list')
            // ->
            ->get();
            dd($projects);
    	return view('monthlyreport');
    }

     /**
    * @return \Illuminate\Support\Collection
    */
    public function exportExcel() 
    {

    return \Excel::download(new MonthlyReportExport, 'loans.xlsx');

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
