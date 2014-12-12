@extends('layouts.master')

@section('title')
編輯文章 @parent
@stop

@section('content')
<!-- Blog Post Content Column -->
<div class="col-lg-8">

    <!-- Blog Post -->
    <h1>編輯文章</h1>
    
    {{ Form::open(['url' => 'posts/1', 'method' => 'PATCH', 'class' => 'horizontal-form', 'role' => 'form']) }}
    
    <!-- Title -->
    <div class="form-group">
        {{ Form::label('title', '標題： ') }}
        {{ Form::text('title', '資料庫內的文章標題', ['class' => 'form-control', 'placeholder' => '請輸入文章標題', 'required']) }}
    </div>
    
    <!-- Post Content -->
    <div class="form-group">
        {{ Form::label('content', '文章內容： ') }}
        {{ Form::textarea('content', '資料庫內的文章內容', ['class' => 'form-control', 'placeholder' => '請輸入文章內容', 'required']) }}
    </div>
    
    <div class="form-group text-right">
        <a href="{{ url('/') }}" class="btn btn-link"> &#171; 返回</a>
        {{ Form::submit('更新', ['class' => 'btn btn-success']) }}
    </div>

    {{ Form::close() }}
    
</div>

@include('partials.sidebar')

@stop
