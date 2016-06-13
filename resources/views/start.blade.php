@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2>Setup Your First Slack Invite Page</h2>
            <form  class="form" role="form" method="POST" action="{{ url('/team') }}">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="name" class="control-label">Slack Team Name</label>
                    <input type="text" name="name" class="form-control" placeholder="slackvite" />
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Slack Team Token</label>
                    <input type="text" name="token" class="form-control" />
                    <span class="help-block"><a href="https://api.slack.com/docs/oauth-test-tokens" target="_blank">Generate Slack API Token</a>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Get Started</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection
