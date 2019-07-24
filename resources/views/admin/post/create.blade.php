@extends('layouts.admin')
@section('title')
    create new post
@endsection

@section('content')

    {!! Form::open(['action'=>'AdminPostsController@store','method'=>'post','files'=>true]) !!}
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-8">
                <div class="form-group">
                    {!! Form::text('title',null,['class'=>'form-control','placeholder'=>'title']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-8">
                <div class="form-group">
                    {!! Form::textarea('body',null,['class'=>'form-control','placeholder'=>'content']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-8">
                <div class="form-group">
                    {!! Form::select('category_id',[''=>'chose category'],null,['class'=>'form-control']) !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-8">
                <div class="form-group">
                    {!! Form::text('tag',null,['class'=>'form-control','placeholder'=>'tags']) !!}
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
                    {!! Form::submit('create post',['class'=>'btn btn-primary']) !!}
                </div>
            </div>
        </div>
    {!! Form::close() !!}

@endsection