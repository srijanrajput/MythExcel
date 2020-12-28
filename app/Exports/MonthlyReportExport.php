<?php

namespace App\Exports;

use App\Loan;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MonthlyReportExport implements FromView
{
	public function view(Request $request): View
	{
		dump($request);exit;
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
	    return view('partials.export-report', [
	        'projects' => $projects
	    ]);
	 }
}