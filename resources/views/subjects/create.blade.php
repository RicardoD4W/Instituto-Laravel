<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    

    @extends('layouts/master')
    @section('navbar')
    @endsection
    
    @section('content')

    <h1>Creating signature...</h1>
    <form action="{{route('subjects.create')}}" method="POST">
        @csrf
        Name: <input name="name" type="text" value="">
        Credits: <input name="name" type="text" value="">
        Hour: <input name="last_name" type="text" value="">
        <button type="submit"> Create subject </button>
    </form>
    
    @endsection


</body>
</html>