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

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12 d-flex justify-content-center">
                <h1 class="m-3">Welcome to <code>Paco IV Martos</code></h1>
            </div>
        </div>




        <div class="mt-5 d-flex justify-content-center">
            <table class="table text-center w-50">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th class="" scope="col">Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">birth_year</th>
                        <th scope="col">gender</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>

                        @foreach ($students as $student)
                        

                        <th scope="row">{{$student->id}}</th>
                        <td>{{$student->name}}</td>
                        <td>{{$student->last_name}}</td>
                        <td>{{$student->birth_year}}</td>
                        <td>{{$student->gender}}</td>
                        <td>
                            <form action="{{route('students.showDetails',[$student->id])}}" method="GET">
                                
                                <input type="hidden" name="id" value="{{$student->id}}">
                                <button role="submit" class=" btn btn-primary">Details</button>
                            </form>
                        </td>

                        <td>
                            <form action="{{route('students.editForm',[$student->id])}}" method="GET">
                                
                                <input type="hidden" name="id" value="{{$student->id}}">
                                <button role="submit" class=" btn btn-secondary">Edit</button>
                            </form>
                        </td>

                        <td>
                            <form action="{{route('students.delete')}}" method="GET">
                                
                                <button role="submit" class=" btn btn-danger">Delete</button>
                                <input type="hidden" name="id" value="{{$student->id}}">
                            </form>
                        </td>
                    </tr>
        </div>
        @endforeach
    </div>

    @endsection

</body>
</html>