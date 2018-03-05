@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            {!! link_to_route('skills.index', 'View Skills', [], ['type'=>'button', 'class'=>'btn btn-primary btn-sm']) !!}
            {!! link_to_route('logout', 'Logout', [], ['type'=>'button', 'class'=>'btn btn-danger btn-sm']) !!}
        </div>
    </div>
</div>
@endsection