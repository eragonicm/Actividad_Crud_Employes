<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show Employee</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <br>
                <table class="table table-striped table-bordered">
                    <tr>
                        <td class="text-center" colspan="2"><strong>Employee data</strong></td>
                    </tr>
                <tr>
                    <td><strong>Name</strong></td>
                    <td>{{ $employee->name}}</td>
                </tr>
                <tr>
                    <td><strong>Lastname</strong></td>
                    <td>{{ $employee->lastname}}</td>
                </tr>
                <tr>
                    <td><strong>Email</strong></td>
                    <td>{{ $employee->email}}</td>
                </tr>
                <tr>
                    <td><strong>Document</strong></td>
                    <td>{{ $employee->document}}</td>
                </tr>
                <tr>
                    <td><strong>Gender</strong></td>
                    <td>{{ $employee->gender}}</td>
                </tr>
                <tr>
                    <td><strong>Companie</strong></td>
                    <td>{{ $employee->companies_id}}</td>
                </tr>
                </table>
                <a href="{{url('employees')}}" class="btn btn-primary">Back home</a>
            </div>
        </div>
    </div>
</body>
</html>