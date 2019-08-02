@extends('layouts.admin')

@section('title')
    create new user
@endsection

@section('content')



    {!! Form::model($user,['action'=>['AdminUsersController@update',$user->id],'method'=>'patch','files'=>true]) !!}

    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-8">
            <div class="form-group">
                {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'name']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-8">
            <div class="form-group">
                {!! Form::text('user_name',null,['class'=>'form-control','placeholder'=>'user name']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-8">
            <div class="form-group">
                {!! Form::email('email',null,['class'=>'form-control','placeholder'=>'email']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-8">
            <div class="form-group">
                {!! Form::select('role_id',[''=>'chose role']+$roles,null,['class'=>'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-8">
            <div class="form-group">
                {!! Form::password('password',['class'=>'form-control','placeholder'=>'password']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-8">
            <div class="form-group">
                {!! Form::file('photo_id',['class'=>'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-8">
            <div class="form-group">
                {!! Form::submit('create user',['class'=>'btn btn-primary']) !!}
            </div>
        </div>
    </div>
    {!! Form::close() !!}



@endsection