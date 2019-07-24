@extends('layouts.admin')

@section('title')

    Categories

@endsection

@section('content')

    <div class="row">

        <div class="col-sm-1"></div>
        <div class="col-sm-4">
            {!! Form::open(['action'=>'AdminCategoriesController@store','method'=>'post']) !!}
                <div class="form-group">
                    {!! Form::label('name','Category name?') !!}
                    {!! Form::text('name',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Create Category',['class'=>'btn btn-primary']) !!}
                </div>
            {!! Form::close() !!}
        </div>
        <div class="col-sm-6">
            <br>
             <table class="table">
                 <thead>
                   <tr>
                     <th>Title</th>
                     <th>count</th>
                     <th>Edit</th>
                     <th>Delete</th>
                     <th>Create at</th>
                   </tr>
                 </thead>
                 <tbody>
                 @if($categories)
                     @foreach($categories as $category)
                       <tr>
                         <td>{{$category->name}}</td>
                         <td>count</td>
                           <td>
                               {!! Form::open(['url'=>['admin/categories/'.$category->id.'/edit'],'method'=>'get']) !!}
                               <div class="form-group">
                                   {!! Form::submit('Edit',['class'=>'form-control btn btn-info']) !!}
                               </div>
                               {!! Form::close() !!}
                           </td>
                           <td>
                               {!! Form::open(['action'=>['AdminCategoriesController@destroy',$category],'method'=>'DELETE']) !!}
                           <div class="form-group">
                                   {!! Form::submit('Delete',['class'=>'form-control btn btn-danger']) !!}
                           </div>
                            {!! Form::close() !!}
                         </td>
                         <td>{{$category->created_at}}</td>
                       </tr>
                     @endforeach
                  @endif
                 </tbody>
               </table>
        </div>
        <div class="col-sm-1"></div>
    </div>

@endsection