@extends('layouts.master')

@section('title')
建立新文章 @parent
@stop

@section('content')
<!-- Blog Post Content Column -->
<div class="col-lg-8">

    <!-- Blog Post -->
    <h1>建立新文章</h1>
    
    @include('partials.notifications')
    
    {{ Form::open(['route' => 'posts.store', 'method' => 'POST', 'class' => 'horizontal-form', 'role' => 'form']) }}
    
    <!-- Title -->
    <div class="form-group{{ $errors->first('title', ' has-error') }}">
        {{ Form::label('title', '標題： ') }}
        {{ Form::text('title', null, ['class' => 'form-control', 'placeholder' => '請輸入文章標題', 'required']) }}
    </div>
    
    <!-- Post Content -->
    <div class="form-group{{ $errors->first('content', ' has-error') }}">
        {{ Form::label('content', '文章內容： ') }}
        {{ Form::textarea('content', null, ['class' => 'form-control', 'placeholder' => '請輸入文章內容', 'required']) }}
    </div>
    
    <!-- Post Category -->
    <div class="form-group{{ $errors->first('category_id', ' has-error') }}">
        {{ Form::label('category_id', '文章分類： ') }}
        {{ Form::select('category_id', $categories->lists('name', 'id'), null, ['class' => 'form-control']) }}
    </div>
    
    <!-- Button -->
    <div class="form-group text-right">
        <a href="{{ route('posts.index') }}" class="btn btn-link"> &#171; 返回</a>
        {{ Form::submit('發表', ['class' => 'btn btn-success']) }}
    </div>

    {{ Form::close() }}
    
</div>

@include('partials.sidebar')

@stop
