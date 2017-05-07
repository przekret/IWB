@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Task</div>
                <form method="POST" action="/home">
                    {!! csrf_field() !!}
                    <div class="panel-body">
                        <div>
                        <textarea style="overflow: auto;resize:none" rows="5" cols="41" name="text">
                            What you want to do?!
                        </textarea>
                        </div>
                        <div>
                            <input type="date" name="date" id="myDate" value="Date">
                            <input type="time" name="time" id="myTime" value="Time">
                        </div>
                        <button type="submit" class="btn btn-primary" pull-right value="create">
                            Add Note
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
