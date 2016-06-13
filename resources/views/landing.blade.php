@extends('layouts.landing', ['title' => $team->name])

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="landing-container">
            <div class="landing-hero">
                <h1><i class="fa fa-slack" aria-hidden="true"></i> Join <strong>{{$team->name}}</strong> On Slack</h1>
                <p>Enter your email address in the form below, click <em>Get Invite</em>, and your invitation will be on its way.</p>
                <form action="/invite" method="post">
                    <div class="row">
                        <div class="col-xs-12 col-sm-9">
                            <input type="text" name="email" id="email" class="form-control input-lg"/>
                        </div>
                        <div class="col-xs-12 col-sm-3">
                            <input type="submit" value="Get Invite" class="btn btn-success btn-lg text-uppercase" />
                        </div>
                    </div>
                    <input type="hidden" name="slug" value="{{$team->slug}}" />
                    {{ csrf_field() }}
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
