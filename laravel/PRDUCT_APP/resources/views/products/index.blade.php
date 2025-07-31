@extends('layout')



@section('content')

<table class="table table-strped">
    <tr><th>ID</th><th>Name</th><th>price</th><th>Image</th><th>Action</th></tr>
@foreach($products as $item)
<tr><th>{{$item->id}}</th><th>{{$item->name}}</th><th>{{$item->price}}</th><th><img src="storage/{{$item->image}}" style="width:120px;"/></th><th><a href="{{route('products.show',$item->id)}}">View</a> <a href="{{route('products.edit',$item->id)}}">Edit</a> <form method="POST" action="{{route('products.destroy',$item->id)}}" style="display:inline;">
@csrf
@method("DELETE")
<input type="submit" name="del" value="Delete" />
</form></th></tr>

@endforeach
</table>
@endsection