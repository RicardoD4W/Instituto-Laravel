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

    <h2>Editing student {{$students->name}}...</h2>

        <form action="{{route('students.edit')}}" method="POST">
            @csrf
            <input name="id" type="hidden" value="{{$students->id}}">
            Name: <input name="name" type="text" value="{{$students->name}}">
            @error('name')
                <br>
                <p class="mt-1 mb-1 alert alert-danger small"> {{ $message }} </p>
                @enderror

            Last Name: <input name="last_name" type="text" value="{{$students->last_name}}">
            @error('last_name')
                <br>
                <p class="mt-1 mb-1 alert alert-danger small"> {{ $message }} </p>
                @enderror

            Birth Date: <input name="birth_year" type="date" value="{{$students->birth_year}}">
            @error('birth_year')
                <br>
                <p class="mt-1 mb-1 alert alert-danger small"> {{ $message }} </p>
                @enderror

            Gender: <input name="gender" type="text" maxlength="1" value="{{$students->gender}}">
            @error('gender')
                <br>
                <p class="mt-1 mb-1 alert alert-danger small"> {{ $message }} </p>
                @enderror

            <button type="submit"> Edit Student </button>
        </form>






    
    @endsection


</body>
</html>