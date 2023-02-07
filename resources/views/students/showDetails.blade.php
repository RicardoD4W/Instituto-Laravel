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
        <div class="mt-5 d-flex flex-column aling-items-center justify-content-center">

            <h2>Student {{ $students->name }}</h2>
            <table class="table text-center w-50">
                <tr>

                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Birth Date</th>
                    <th scope="col">Gender</th>
                </tr>
                <tr>

                    <td>{{ $students->id }}</td>
                    <td>{{ $students->name }}</td>
                    <td>{{ $students->last_name }}</td>
                    <td>{{ $students->birth_year }}</td>
                    <td>{{ $students->gender }}</td>
                </tr>
            </table>


            <h2 class="mt-5">Signatures</h2>
            <table class="table text-center w-50">
                <tr>

                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Credits</th>
                    <th scope="col">Hours</th>
                    <th scope="col">Details</th>
                </tr>

                @foreach ($subjects as $subject)
                    <tr>

                        <td>{{ $subject->id }}</td>
                        <td>{{ $subject->name }}</td>
                        <td>{{ $subject->credits }}</td>
                        <td>{{ $subject->hour }}</td>
                        <td>
                            <form action="" method="GET">
                                <input type="hidden" name="id">
                                <button role="submit" class=" btn btn-primary">Details</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    @endsection


</body>

</html>
