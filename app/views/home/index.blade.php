@extends('layouts.master')

@section('title')
首頁 @parent
@stop

@section('content')
<!-- Blog Entries Column -->
<div class="col-md-8">

    <h1 class="page-header">
        偽 Blog
        <small>文章總覽</small>
    </h1>

    @if (true)
    <div class="text-right">
        <a class="btn btn-success" href="{{ url('posts/create') }}">新增文章</a>
    </div>
    @endif
    
    @foreach(range(1, 10) as $post)
    <h2>
        <a href="{{ url('posts/'.$post) }}">{{{ '文章標題'.$post }}}</a>
    </h2>
    <p class="text-right"><span class="glyphicon glyphicon-time"></span> 發表於 August 28, 2013 at 10:00 PM</p>
    <hr>
    <p>{{{ '文章內容'.$post }}}</p>
    
    <div class="text-right">
        <a class="btn btn-info" href="{{ url('posts/'.$post) }}">閱讀全文</a>
        @if (true)
        <a class="btn btn-primary" href="{{ url('posts/'.$post.'/edit') }}">編輯</a>
        <a class="btn btn-danger" href="{{ url('posts/'.$post) }}">刪除</a>
        @endif
    </div>

    <hr>
    @endforeach

    <!-- Pager -->
    <ul class="pager">
        <li class="previous">
            <a href="#">&larr; Older</a>
        </li>
        <li class="next">
            <a href="#">Newer &rarr;</a>
        </li>
    </ul>

</div>

@include('partials.sidebar')

@stop