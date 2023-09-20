@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col">
        <h1>Send report</h1>
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
        <form action="/expense_reports/ {{ $report->id }}/sendMail" method="POST">
            @csrf
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Type a email" value="{{ old('email')}}">
                <button type="submit" class="btn btn-primary">Send mail</button>
            </div>
        </form>
    </div>
</div>
@endsection