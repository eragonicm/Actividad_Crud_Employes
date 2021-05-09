<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New Employee</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <br>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        Registration Form
                    </div>
                <div class="panel-body">
                        <form action="{{ url('employees')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="">Name Employee</label>
                                <input type="text" class="form-control" name="name" id="name">
                            </div>
                            <div class="form-group">
                                <label for="">Lastname Employee</label>
                                <input type="text" class="form-control" name="lastname" id="lastname">
                            </div>
                            <div class="form-group">
                                <label for="">Email Employee</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group">
                                <label for="">Document Employee</label>
                                <input type="text" class="form-control" name="document" id="document">
                            </div>
                            <div class="form-group">
                                <label for="">Gender Employee</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Companie</label>
                                <select name="companies_id" id="companies_id" class="form-control">
                                    <option value="1">1</option>
                                </select>
                            </div>
                            <hr>
                            <button class="btn btn-primary" type="submit">Save Employee</button>
                            <a href="{{url('employees')}}" class="btn btn-warning">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</body>
</html>