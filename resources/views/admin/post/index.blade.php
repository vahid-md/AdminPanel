@extends('layouts.admin')

@section('title')
    All Posts
@endsection

@section('content')

     <table class="table">
         <thead>
           <tr>
             <th>Title</th>
             <th>Author</th>
             <th>Categories</th>
             <th>Tags</th>
             <th>Edit post</th>
             <th>Delete post</th>
             <th>Create at</th>
           </tr>
         </thead>
         <tbody>
            @if($posts)
                @foreach($posts as $post)
                   <tr>
                     <td>{{$post->title}}</td>
                     <td>{{$post->author}}</td>
                     <td>{{$post->category['name']}}</td>
                     <td>{{$post->tag}}</td>
                     <td>
                         {!! Form::open(['url'=>['admin/posts/'.$post->id.'/edit'],'method'=>'get']) !!}
                            <div class="form-group">
                                {!! Form::submit('Edit post',['class'=>'form-control btn btn-info']) !!}
                            </div>
                         {!! Form::close() !!}
                     </td>
                     <td>
                         {!! Form::open(['action'=>['AdminPostsController@destroy',$post],'method'=>'DELETE']) !!}
                         <div class="form-group">
                             {!! Form::submit('Delete post',['class'=>'form-control btn btn-danger']) !!}
                         </div>
                         {!! Form::close() !!}
                     </td>
                     <td>{{$post->created_at}}</td>
                   </tr>
               @endforeach
             @endif
         </tbody>
       </table>

@endsection
