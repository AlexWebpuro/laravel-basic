@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col">
        <h1>Delete report {{ $report->id }} </h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="/expense_reports/" class="btn btn-secondary">Back</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <form action="/expense_reports/{{ $report->id }}" method="POST">
            @csrf
            @method('delete')
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Delete</button>
            </div>
        </form>
    </div>
</div>
@endsection