@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col">
        <h1>Create Expense</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="/expense_reports/{{ $report->id }}" class="btn btn-secondary">Back</a>
    </div>
</div>
<div class="row">
    <div class="col">
        @if( $errors->any() )
        <div class="alert alert-danger">
            <ul>
                @foreach( $errors->all() as $error )
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/expense_reports/{{$report->id}}/expenses" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">description</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Type a description" value="{{ old('description')}}">
                <label for="Amount">Amount</label>
                <input type="text" class="form-control" id="amount" name="amount" placeholder="Type a amount" value="{{ old('amount')}}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection