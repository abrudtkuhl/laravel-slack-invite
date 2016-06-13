@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Teams</div>

                <div class="panel-body">
                    @foreach ($teams as $team)
                        <label>Team:</label> {{ $team->name }}<br />
                        <label>Token:</label> {{ $team->token }}<br />
                        <label>Slug:</label> {{ $team->slug }}<br />
                        <a href="/team/edit" class="btn btn-primary">Edit Team</a> <a href="{{ $team->slug }}.localhost:8000" class="btn btn-primary">View Site</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
