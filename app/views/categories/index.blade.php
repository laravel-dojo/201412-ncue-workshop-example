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
    
    <div class="text-right">
        <a href="#" class="btn btn-success btn-sm">新增</a>
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
                <tr>
                    <td>1</td>
                    <td>Table cell</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">編輯</a>
                        <a href="#" class="btn btn-danger btn-sm">刪除</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <hr>

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