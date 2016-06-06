@extends('layout')

@section('content')
    <div class="content">
        <h1>Signup</h1>
        <form action="/invite" method="post">
            <input type="text" name="email" id="email" style="margin-bottom:10px"/>
            <br/>
            <input type="submit" value="Get Invite" class="btn btn-success" style="font-size:24px"/>
            {{ csrf_field() }}

        </form>
    </div>
@endsection
