@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col">
        <h1>Reports</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="/expense_reports/create" class="btn btn-primary">Create a new report</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <table class="table">
            @foreach( $expenseReports as $expenseReport )
            <tr>
                <td> {{ $expenseReport->title }} </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection
