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
                    @foreach(range(1, 4) as $category)
                    <li><a href="{{ url('categories/'.$category) }}">{{{ '分類'.$category }}}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- /.row -->
    </div>

    @if (true)
    <!-- Side Widget Well -->
    <div class="well">
        <h4>網站管理</h4>
        <p><a href="{{ url('login') }}">登入</a></p>
    </div>
    @endif

</div>

