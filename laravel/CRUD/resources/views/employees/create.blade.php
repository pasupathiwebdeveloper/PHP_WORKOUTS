<form action="{{route('employees.store')}}" method="post" >
@csrf
<input type="text" name="name" /><br>
<input type="text" name="age" /><br>
<input type="submit" name="sub" /><br>
</form>