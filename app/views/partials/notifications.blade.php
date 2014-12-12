@if ($message = Session::get('success'))
<div class="alert alert-dismissable alert-success backend-hud">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>成功！</strong> {{ $message }}
</div>
@endif