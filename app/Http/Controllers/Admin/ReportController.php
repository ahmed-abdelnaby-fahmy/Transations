<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ReportRequest;
use App\Models\Report;
use App\Models\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.reports.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReportRequest $request)
    {
        $startDate = Carbon::parse($request->input('start_date'));
        $endDate = Carbon::parse($request->input('end_date'));
        $reportData = [];
        $results = Transaction::select(
            DB::raw('MONTH(due_on) as month'),
            DB::raw('YEAR(due_on) as year'),
            DB::raw('SUM(CASE WHEN status = "Paid" THEN amount ELSE 0 END) as paid'),
            DB::raw('SUM(CASE WHEN status = "Outstanding" THEN amount ELSE 0 END) as outstanding'),
            DB::raw('SUM(CASE WHEN status = "Overdue" THEN amount ELSE 0 END) as overdue')
        )
            ->whereBetween('due_on', [$startDate, $endDate])
            ->groupBy(DB::raw('YEAR(due_on), MONTH(due_on)'))
            ->get();
        foreach ($results as $result) {
            $reportData[] = [
                'month' => $result->month,
                'year' => $result->year,
                'paid' => $result->paid,
                'outstanding' => $result->outstanding,
                'overdue' => $result->overdue,
            ];
        }
        return view('admin.reports.show_report', ['report' => $reportData]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }
}
