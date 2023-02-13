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
        <h1>SHOW DETAILS</h1>
        <div class="mt-5 ms-5 d-flex flex-column aling-items-center justify-content-center">

            <h2>Subject {{ $subject->name }}</h2>
            <table class="table text-center w-50">
                <tr>

                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Credits</th>
                    <th scope="col">Hour</th>
                </tr>
                <tr>

                    <td>{{ $subject->id }}</td>
                    <td>{{ $subject->name }}</td>
                    <td>{{ $subject->credits }}</td>
                    <td>{{ $subject->hour }}</td>
                </tr>
            </table>


            <h2 class="mt-5">Student</h2>
            <table class="table text-center w-50">
                <tr>

                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Birth Date</th>
                    <th scope="col">Gender</th>
                </tr>

                @foreach ($students as $student)
                    <tr>

                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->last_name }}</td>
                        <td>{{ $student->birth_year }}</td>
                        <td>{{ $student->gender }}</td>

                    </tr>
                @endforeach
            </table>
        </div>
    @endsection


</body>

</html>
