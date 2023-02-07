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

    <form action="{{route('students.edit')}}" method="POST">
            @csrf
            <input name="id" type="hidden" >
            Name: <input name="name" type="text">
            Last Name: <input name="last_name" type="text">
            Birth Date: <input name="birth_year" type="date">
            Gender: <input name="gender" type="text" maxlength="1">
            <button type="submit"> Edit Student </button>
        </form>



    
    @endsection


</body>
</html>