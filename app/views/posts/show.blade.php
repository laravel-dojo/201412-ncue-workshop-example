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
        <a class="btn btn-success" href="{{ url('posts/create') }}">新增文章</a>
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
        <a class="btn btn-primary" href="{{ url('posts/1/edit') }}">編輯</a>
        <a class="btn btn-danger" href="{{ url('posts/1') }}">刪除</a>
    </div>
    @endif
    
    <hr>

    <!-- Blog Comments -->

    <!-- Comments Form -->
    <div class="well">
        <h4>回覆文章</h4>
        <form role="form">
            <div class="form-group">
                <textarea class="form-control" rows="3"></textarea>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-info">送出</button>
            </div>
        </form>
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
