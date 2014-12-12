@extends('layouts.master')

@section('title')
文章分類頁 @parent
@stop

@section('content')
<!-- Blog Entries Column -->
<div class="col-md-8">

    <h1 class="page-header">
        偽 Blog
        <small>文章分類列表</small>
    </h1>
    
    @include('partials.notifications')
    
    <div class="text-right">
        <a href="{{ route('categories.create') }}" class="btn btn-success btn-sm">新增</a>
    </div>
    
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>分類名稱</th>
                    <th width="150">管理功能</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr>
                    <td>{{{ $category->id }}}</td>
                    <td>{{{ $category->name }}}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">編輯</a>
                        
                        {{ Form::open(['url' => '/categories/'.$category->id, 'method' => 'DELETE', 'style' => 'display: inline;', 'role' => 'form']) }}
                        {{ Form::submit('刪除', ['class' => 'btn btn-danger btn-sm']) }}
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <hr>

    <!-- Pager -->
    <div class="text-center">
        {{ $categories->links() }}
    </div>

</div>

@include('partials.sidebar')

@stop