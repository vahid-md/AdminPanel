@extends('layouts.admin')

@section('title')

    Edit {{$category->name}}

@endsection

@section('content')

    <div class="row">

        <div class="col-sm-3"></div>
        <div class="col-sm-6">
            {!! Form::model($category,['action'=>['AdminCategoriesController@update',$category->id],'method'=>'patch']) !!}
            <div class="form-group">
                {!! Form::label('name','Category name?') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Category',['class'=>'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection