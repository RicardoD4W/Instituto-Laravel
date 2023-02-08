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

    <h2>Editing subject {{$subjects->name}}...</h2>

    <form action="{{route('subjects.edit')}}" method="POST">
            @csrf
            <input name="id" type="hidden" value="{{$subjects->id}}">
            Name: <input name="name" type="text" value="{{$subjects->name}}">
            Credits: <input name="credits" type="number" value="{{$subjects->credits}}">
            Hour: <input name="hour" type="number" value="{{$subjects->hour}}">
            <button type="submit"> Edit Subject </button>
        </form>



    
    @endsection


</body>
</html>