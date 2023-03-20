
<?php
    use \Illuminate\Support\Facades\Session;
?>
<div class="card">
    <form action="{{route('addProject')}}" method="post">
@csrf
<div class="form-group">
    <label for="project">สร้างการคัดสรรค์ใหม่</label>
    <br>
    <input type="text" class="form-control" name="project">

</div>
@if (Session::has('msg'))
    <span>{{Session::get('msg')}}</span>
    <br>
@endif
<input type="submit" value="save" class="btn btn-primary">

</form>
</div>
