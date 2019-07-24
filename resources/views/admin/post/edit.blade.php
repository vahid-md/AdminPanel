@extends('layouts.admin')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css" />
<script src="http://demo.itsolutionstuff.com/plugin/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.js"></script>
@section('title')
    Edit {{$post->title}}
@endsection

@section('content')

    {!! Form::model($post,['action'=>['AdminPostsController@update',$post->id],'method'=>'patch','files'=>true]) !!}
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
        <div class="col-sm-2">
            <img src="{{$post->photo ? $post->photo->path : ''}}" alt="" width="200" height="200">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-8">
            <div class="form-group">
                {!! Form::select('category_id',[''=>'chose category']+$categories,null,['class'=>'form-control']) !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-8">
            <div class="form-group">
                {!! Form::text('tag',null,['class'=>'form-control','data-role'=>'tagsinput','placeholder'=>'tags']) !!}
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