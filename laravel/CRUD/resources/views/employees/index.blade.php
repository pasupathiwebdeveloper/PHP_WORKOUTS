<!-- @php
echo $employees;
print_r(json_decode($employees,true));
@endphp -->
@if(session('success'))
{{session('success')}}
@endif


<a href="{{route('employees.create')}}">create</a><br>
<table>
    <tr><th>id</th><th>name</th><th>age</th><th>action</th></tr>
@foreach($employees as $emp)
<tr>
<td>{{$emp->id}}</td><td>{{$emp->name}}</td><td>{{$emp->age}}</td>
<td><a href="{{route('employees.show',$emp->id)}}">View</a> <a href="{{route('employees.edit',$emp->id)}}">Edit</a> 
    <form action="{{route('employees.destroy',$emp->id)}}" method="post" style="display:inline;">
      @csrf
      @method("DELETE")
      <input type="submit" value="Delete" />
    </form>
</td>
</tr>
@endforeach
</table>