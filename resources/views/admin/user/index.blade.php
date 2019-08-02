@extends('layouts.admin')

@section('title')
    All Users
@endsection

@section('content')

    <div class="row">
    <div class="col-sm-1"></div>
        <div class="col-sm-10">
         <table class="table">
             <thead>
               <tr>
                 <th>Username</th>
                 <th>Name</th>
                 <th>Email</th>
                 <th>Role</th>
                 <th>Edit</th>
                 <th>Delete</th>
               </tr>
             </thead>
             <tbody>
             @if($users)
                @foreach($users as $user)
                   <tr>
                     <td>{{$user->user_name}}</td>
                     <td>{{$user->name}}</td>
                     <td>{{$user->email}}</td>
                     <td>{{$user->role->name}}</td>
                     <td>
                           {!! Form::open(['url'=>['admin/users/'.$user->id.'/edit'],'method'=>'get']) !!}
                           <div class="form-group">
                               {!! Form::submit('Edit',['class'=>'form-control btn btn-info']) !!}
                           </div>
                           {!! Form::close() !!}
                     </td>
                     <td>
                           {!! Form::open(['action'=>['AdminUsersController@destroy',$user],'method'=>'DELETE']) !!}
                           <div class="form-group">
                               {!! Form::submit('Delete',['class'=>'form-control btn btn-danger']) !!}
                           </div>
                           {!! Form::close() !!}
                     </td>
                   </tr>
                @endforeach
             @else
                <h1>dose not exist users</h1>
             @endif
             </tbody>
           </table>
        </div>

    </div>

@endsection