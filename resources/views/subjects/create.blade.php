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
    <form action="{{route('Create')}}" method="POST">
        @csrf
        Name: <input name="name" type="text" value="{{old('name')}}">
        @error('name')
                <br>
                <p class="mt-1 mb-1 alert alert-danger small"> {{ $message }} </p>
                @enderror
        Credits: <input name="credits" type="text" value="{{old('credits')}}">
        @error('credits')
                <br>
                <p class="mt-1 mb-1 alert alert-danger small"> {{ $message }} </p>
                @enderror
        Hour: <input name="hour" type="text" value="{{old('hour')}}">
        @error('hour')
                <br>
                <p class="mt-1 mb-1 alert alert-danger small"> {{ $message }} </p>
                @enderror
        <button type="submit"> Create subject </button>
    </form>
   
    @endsection


</body>
</html>