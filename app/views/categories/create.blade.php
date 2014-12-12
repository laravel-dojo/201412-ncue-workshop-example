@extends('layouts.master')

@section('title')
建立新分類 @parent
@stop

@section('content')
<!-- Blog Post Content Column -->
<div class="col-lg-8">

    <!-- Blog Post -->
    <h1>建立新分類</h1>
    
    {{ Form::open(['url' => 'categories', 'method' => 'POST', 'class' => 'horizontal-form', 'role' => 'form']) }}
    
    <!-- Name -->
    <div class="form-group">
        {{ Form::label('name', '分類名稱： ') }}
        {{ Form::text('name', null, ['class' => 'form-control', 'placeholder' => '請輸入文章標題', 'required']) }}
    </div>
    
    <div class="form-group text-right">
        <a href="{{ route('categories.index') }}" class="btn btn-link"> &#171; 返回</a>
        {{ Form::submit('新增', ['class' => 'btn btn-success']) }}
    </div>

    {{ Form::close() }}
    
</div>

@include('partials.sidebar')

@stop
