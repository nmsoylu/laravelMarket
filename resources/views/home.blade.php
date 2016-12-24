@extends('layouts.app')

@section('content')
    <script src="/js/socket.io.js"></script>
    <script>
        var socket = io('http://127.0.0.1:3000');
        socket.on('connect', function(){
            alert('connect');
        });
        socket.on('event', function(data){});
        socket.on('disconnect', function(){});
    </script>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
