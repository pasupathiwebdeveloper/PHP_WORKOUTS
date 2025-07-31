<form action="{{route('employees.update',$employee->id)}}" method="post">
@csrf
@method("PUT")
<input type="text" name="name" value="{{$employee->name}}"/><br>
<input type="text" name="age" value="{{$employee->age}}" /><br>
<input type="submit" name="sub" /><br>
</form>