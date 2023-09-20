<?php

namespace App\Http\Controllers;

use App\Mail\SummaryReport;
use Illuminate\Support\Facades\Mail;
use App\Models\ExpenseReport;
use Illuminate\Http\Request;

class ExpenseReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('expenseReport.index', array(
            'expenseReports' => ExpenseReport::all(),
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('expenseReport.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validData = $request->validate( [
            'title' => 'required|min:3',
        ] );

        $report = new ExpenseReport();
        $report->title = $request->get( 'title' );
        $report->save();

        return redirect( '/expense_reports' );
    }

    /**
     * Display the specified resource.
     */
    public function show(ExpenseReport $expenseReport )
    {
        // $report = ExpenseReport::findOrFail( $id );
        return view( 'expenseReport.show', [
            'report' => $expenseReport,
        ] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $report = ExpenseReport::findOrFail( $id );

        return view('expenseReport.edit', [
            'report' => $report,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validData = $request->validate( [
            'title' => 'required|min:3'
        ] );

        $report = ExpenseReport::findOrFail( $id );
        $report->title = $request->get('title');
        $report->save();

        return redirect( '/expense_reports' );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $report = ExpenseReport::findOrFail( $id );
        $report->delete();

        return redirect( '/expense_reports');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function confirmDelete(string $id)
    {
        $report = ExpenseReport::findOrFail( $id );
        return view( 'expenseReport.confirmDelete', [
            'report' => $report
        ] );
    }

    /**
     * Show the form mail report.
     */
    public function confirmSendMail(string $id)
    {
        $report = ExpenseReport::findOrFail( $id );
        return view( 'expenseReport.confirmSendMail', [
            'report' => $report
        ] );
    }

    /**
     * Send mail report.
     */
    public function sendMail( Request $request, $id) {
        $report =  ExpenseReport::findOrFail($id);
        Mail::to( $request->get('email'))->send( new SummaryReport( $report ));
        
        return redirect('expense_reports/' . $id );
    }
}
