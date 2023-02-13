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
        <main class="container mt-5 d-flex flex-column">
            <form action="{{ route('create') }}" method="POST">
                @csrf
                <input name="id" type="hidden">
                Name: <input name="name" type="text" value="{{old('name')}}">
                @error('name')
                <br>
                <p class="mt-1 mb-1 alert alert-danger small"> {{ $message }} </p>
                @enderror    
                
                Last Name: <input name="last_name" type="text" value="{{old('last_name')}}">
                @error('last_name')
                <br>
                <p class="mt-1 mb-1 alert alert-danger small"> {{ $message }} </p>
                @enderror


                Birth Date: <input name="birth_year" type="date" value="{{old('birth_year')}}">
                @error('birth_year')
                <br>
                <p class="mt-1 mb-1 alert alert-danger small"> {{ $message }} </p>
                @enderror


                Gender: <input name="gender" type="text" maxlength="1" value="{{old('gender')}}">
                @error('gender')
                <br>
                <p class="mt-1 mb-1 alert alert-danger small"> {{ $message }} </p>
                @enderror

                <table>

                    @foreach ($subjects as $subject)
                        <tr>
                            <td>
                                <label> <input type="checkbox" name="subjectChecked[]"
                                        value="{{ $subject->id }}">{{ $subject->name }}</label>
                            </td>
                        </tr>
                    @endforeach
                    <button type="submit"> register Student </button>
                </table>
            </form>
        </main>
    @endsection





</body>

</html>
