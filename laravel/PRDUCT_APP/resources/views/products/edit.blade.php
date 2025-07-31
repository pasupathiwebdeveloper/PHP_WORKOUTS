@extends('layout')

@section('content')
<form method="POST" enctype="multipart/form-data" action="{{route('products.update',$product->id)}}"> 
    @csrf
    @method("PUT")
Name : <input type="text" name="name" value='{{$product->name}}'/><br>
Price : <input type="text" name="price" value='{{$product->price}}' /><br>
File : <input type="file" name="image" /><br>
<input type="submit" name="sub" /><br>
</form>
@endsection