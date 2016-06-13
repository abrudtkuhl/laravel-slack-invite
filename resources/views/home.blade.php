@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <div class="panel panel-default">
                <div class="panel-heading">Teams</div>
                <div class="panel-body">
                    @foreach ($teams as $team)
                        <div class="display-block" style="margin-bottom:20px;">
                            <label>Team:</label> {{ $team->name }}<br />
                            <label>Token:</label> {{ $team->token }}<br />
                            <label>Slug:</label> {{ $team->slug }}<br />
                            <!--<a href="/team/edit" class="btn btn-primary">Edit Team</a> --><a href="/{{$team->slug}}" class="btn btn-primary" target="_blank">View</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
