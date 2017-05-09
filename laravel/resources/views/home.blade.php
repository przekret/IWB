<!DOCTYPE html>
@extends('layouts.app')

<html>

<head>

</head>

@section('content')

<body>
<div class="container">

    <div class="row">

        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New Task</div>
                <form method="POST" action="/home">
                    {!! csrf_field() !!}
                    <div class="panel-body">
                        <div>
                        <textarea style="overflow: auto; border: none; resize:none" rows="5" cols="41" name="text" >
What you want to do?!
                        </textarea>
                        </div>
                        <div>
                            <table>
                                <tr>
                                    <td>
                                    </td>
                                    <td>
                                    </td>
                                    <td style margin-lef: auto; text-align: right>
                                         <p>Due: <input type ="text" name="datepicker" style="border: none" id = "datepicker-13" align="right"></p>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="panel-footer">
                     <button type="submit" class="btn btn-primary" pull-right value="create">
                                        Add Note
                     </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                
                    <form method="POST" action="/selectdone">
                    <div class="panel-heading">Your Tasks:
                        <div align="right">
                        <input type="checkbox" name="done" value="done" align="right"> Show done<br>
                        </div>
                    </div>
                    </form>
                
                <ul class="list-group">
                    
                    @foreach($posts as $pst)

                             {!! csrf_field() !!}
                            <li class="list-group-item style =''
                             margin-top: 20px">
                              <h4 class="list-group-item-heading">{{ $pst->content }}</h4>
                              <p class="list-group-item-text">{{ $pst->valid}}</p>
                             <!--    <span>
                                 <input type="text" name="done_id" value="{{ $pst->id}}" style="display:none" align="right"> <br>
                                 {{ $pst->status}}
                                 {{ $pst->valid}}
                                 {{ $pst->content }}
                                 </span>
                                 <span class="pull-right clearfix">
                                 <form method="POST" action="/done">
                                    <button class="btn btn-xs btn-primary" name='done'>Done</button>
                                    <button class="btn btn-xs btn-primary" style='background-color: #f44336' name='delete'>delete</button>
                                 </span>-->
                            </li>
                        
                    @endforeach
                    
                </ul>
            </div>
        </div>
    </div>
</div>
</body>

<footer>   

</footer> 

</html>
@endsection