<!-- Blog Sidebar Widgets Column -->
<div class="col-md-4">

    <!-- Blog Search Well -->
    {{--<div class="well">
        <h4>Blog Search</h4>
        <div class="input-group">
            <input type="text" class="form-control">
            <span class="input-group-btn">
                <button class="btn btn-default" type="button">
                    <span class="glyphicon glyphicon-search"></span>
            </button>
            </span>
        </div>
        <!-- /.input-group -->
    </div>--}}

    <!-- Blog Categories Well -->
    <div class="well">
        <h4>文章分類</h4>
        <div class="row">
            <div class="col-lg-6">
                <ul class="list-unstyled">
                    @foreach($categories as $category)
                    <li><a href="{{ route('categories.show', $category->id) }}">{{{ $category->name }}}</a></li>
                    @endforeach
                </ul>
                
                @if (Auth::check())
                <div>
                    <p><a href="{{ route('categories.index') }}">管理分類</a></p>
                </div>
                @endif
            </div>
        </div>
        <!-- /.row -->
    </div>

    <!-- Side Widget Well -->
    <div class="well">
        <h4>網站管理</h4>
        @if (Auth::check())
        <p><span class="label label-success">管理中</span> <a href="{{ route('auth.logout') }}">登出</a></p>
        @else
        <p><a href="{{ route('auth.login') }}">登入</a></p>
        @endif
    </div>

</div>

