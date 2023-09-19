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
        <form action="/expense_reports" method="POST">
            @csrf
            @method('put')
            <div class="form-group">
                <label for="title">title</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Type a title">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
@endsection