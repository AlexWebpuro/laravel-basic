@extends('layouts.base')
@section('content')
<div class="row">
    <div class="col">
        <h1>Create report</h1>
    </div>
</div>
<div class="row">
    <div class="col">
        <a href="/expense_reports/" class="btn btn-secondary">Back</a>
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
        <form action="/expense_reports" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Type a title" value="{{ old('title')}}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection