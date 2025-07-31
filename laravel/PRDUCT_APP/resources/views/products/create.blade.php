@extends('layout')



@section('content')
<form method="POST" enctype="multipart/form-data" action="{{route('products.store')}}"> 
    @csrf
Name : <input type="text" name="name" /><br>
Price : <input type="text" name="price" /><br>
File : <input type="file" name="image" /><br>
<input type="submit" name="sub" /><br>
</form>
@endsection