@extends('layouts.master')

@section('title')
文章詳細頁 @parent
@stop

@section('content')
<!-- Blog Post Content Column -->
<div class="col-lg-8">

    <!-- Blog Post -->
    
    @if (true)
    <div class="text-right">
        <a class="btn btn-success" href="{{ route('posts.create') }}">新增文章</a>
    </div>
    @endif
    
    <!-- Title -->
    <h1>{{{ '文章標題' }}}</h1>
    
    <!-- Date/Time -->
    <p class="text-right"><span class="glyphicon glyphicon-time"></span> 發表於 August 24, 2013 at 9:00 PM</p>

    <hr>

    <!-- Post Content -->
    <p>{{{ '文章內容' }}}</p>

    @if (true)
    <div class="text-right">
        <a class="btn btn-primary" href="{{ route('posts.edit', 1) }}">編輯</a>
        
        {{ Form::open(['url' => 'posts/1', 'method' => 'DELETE', 'style' => 'display: inline;', 'role' => 'form']) }}
        {{ Form::submit('刪除', ['class' => 'btn btn-danger btn-sm']) }}
        {{ Form::close() }}
    </div>
    @endif
    
    <hr>

    <!-- Blog Comments -->

    <!-- Comments Form -->
    <div class="well">
        <h4>回覆文章</h4>
        {{ Form::open(['url' => 'comments/create', 'method' => 'POST', 'class' => 'horizontal-form', 'role' => 'form']) }}
            <div class="form-group">
                {{ Form::label('name', '您的名字：') }}
                {{ Form::text('name', null, ['class' => 'form-control', 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('email', '您的 Email：') }}
                {{ Form::email('email', null, ['class' => 'form-control', 'required']) }}
            </div>
            <div class="form-group">
                {{ Form::label('content', '您的留言：') }}
                {{ Form::textarea('content', null, ['rows' => 3, 'class' => 'form-control', 'required']) }}
            </div>
            <div class="text-right">
                {{ Form::submit('送出', ['class' => 'btn btn-info']) }}
            </div>
        {{ Form::close() }}
    </div>

    <hr>

    <!-- Posted Comments -->

    <!-- Comments -->
    @foreach(range(1, 5) as $comment)
    <div class="media">
        <div class="media-body">
            <h4 class="media-heading">{{{ '回覆人'.$comment }}}
                <small>August 25, 2014 at 9:30 PM</small>
            </h4>
            {{{ '回覆內容'.$comment }}}
        </div>
    </div>
    @endforeach

</div>

@include('partials.sidebar')

@stop
