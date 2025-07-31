@extends('layout')

@section('content')
<br>
{{$product->id}} <br>

{{$product->name}} <br>
{{$product->price}} <br>

<img src="http://127.0.0.1:8000/storage/{{$product->image}}" style="width:120px;"> <br>

@endsection