@extends('layouts.master')

@section('title')
關於本站 @parent
@stop

@section('content')
<!-- Blog Entries Column -->
<div class="col-md-8">

    <h1 class="page-header">
        關於本站
        <small>偽 Blog 的二三事…</small>
    </h1>

    <p>這個 Blog 是一個使用 Laravel 做為開發框架的示範</p>

</div>

@include('partials.sidebar')

@stop