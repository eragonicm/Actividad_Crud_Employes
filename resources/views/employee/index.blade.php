<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Index</title>
</head>
<body>
   
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <br>
                <a href="{{ url('employees/create_employee') }}" class="btn btn-primary">Create New Employee</a>
                <br>
                @if (session('status'))
                <br>
                <div class="alert alert-success">
                    {{session('status')}}
                </div>
                @endif
                <br>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Lastname</th>
                            <th>Email</th>
                            <th>Document</th>
                            <th>Gender</th>
                            <th>Companie</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($employees as $employee)
                        <tr>
                            <td>{{$employee->name}}</td>
                            <td>{{$employee->lastname}}</td>
                            <td>{{$employee->email}}</td>
                            <td>{{$employee->document}}</td>
                            <td>{{$employee->gender}}</td>
                            <td>{{$employee->companies_id}}</td>
                            <td>
                                
                                <form action="{{url('employees', $employee->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <a href="{{url('employees',$employee->id)}}" class="btn btn-info btn-sm">Details</a>
                                <a href="{{url('employees/edit',$employee->id)}}" class="btn btn-warning btn-sm">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $employees->links()}}
            </div>
        </div>
    </div>
    
</body>
</html>