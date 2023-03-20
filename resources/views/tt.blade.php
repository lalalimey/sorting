<h1>
    ttttttttt
</h1>
<?php use Illuminate\Support\Facades\DB;
$id = Auth::id();
$staff_raw = DB::table('users')->where('id',$id)->pluck('staff');
$staff = $staff_raw[0];
?>
@if($staff==1)
<a href="{{ url('/staff') }}">
    staff
</a>
@endif
<p>
    {{$staff}}
</p>
