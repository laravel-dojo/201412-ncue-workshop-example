@extends('layouts.master')

@section('title')
文章詳細頁 @parent
@stop

@section('content')
<!-- Blog Post Content Column -->
<div class="col-lg-8">

    <!-- Blog Post -->
    
    @if (Auth::check())
    <div class="text-right">
        <a class="btn btn-success" href="{{ route('posts.create') }}">新增文章</a>
    </div>
    @endif
    
    <!-- Title -->
    <h1>{{{ $post->title }}}</h1>
    
    <!-- Category/Date/Time -->
    <p class="text-right">
        <span>{{{ $post->category->name }}}</span>
        <span class="glyphicon glyphicon-time"></span> 發表於 {{{ $post->created_at->toDateTimeString() }}}
    </p>

    <hr>

    <!-- Post Content -->
    <p>{{{ $post->content }}}</p>

    @if (Auth::check())
    <div class="text-right">
        <a class="btn btn-primary" href="{{ route('posts.edit', $post->id) }}">編輯</a>
        
        {{ Form::open(['url' => 'posts/'.$post->id, 'method' => 'DELETE', 'style' => 'display: inline;', 'role' => 'form']) }}
        {{ Form::submit('刪除', ['class' => 'btn btn-danger btn-sm']) }}
        {{ Form::close() }}
    </div>
    @endif
    
    <hr>

    <!-- Blog Comments -->

    <!-- Comments Form -->
    <div class="well">
        <h4>回覆文章</h4>
        
        @include('partials.notifications')
        
        {{ Form::open(['route' => 'comments.store', 'method' => 'POST', 'class' => 'horizontal-form', 'role' => 'form']) }}
            <div class="form-group{{ $errors->first('name', ' has-error')}}">
                {{ Form::label('name', '您的名字：') }}
                {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
            </div>
            <div class="form-group{{ $errors->first('email', ' has-error')}}">
                {{ Form::label('email', '您的 Email：') }}
                {{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
            </div>
            <div class="form-group{{ $errors->first('content', ' has-error')}}">
                {{ Form::label('content', '您的留言：') }}
                {{ Form::textarea('content', null, ['rows' => 3, 'class' => 'form-control', 'required']) }}
            </div>
            <div class="text-right">
                {{ Form::hidden('post_id', $post->id) }}
                {{ Form::submit('送出', ['class' => 'btn btn-info']) }}
            </div>
        {{ Form::close() }}
    </div>

    <hr>

    <!-- Posted Comments -->

    <!-- Comments -->
    @foreach($post->comments as $comment)
    <div class="media">
        <div class="media-body">
            <h4 class="media-heading">{{{ $comment->name }}}
                <small>{{{ $comment->email }}}</small>
            </h4>
            {{{ $comment->content }}}
        </div>
    </div>
    @endforeach

</div>

@include('partials.sidebar')

@stop
