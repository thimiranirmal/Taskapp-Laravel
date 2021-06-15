<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task | Home</title>
    <!link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" integrity="undefined" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <style>
    th{text-align:center}
    </style>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Daily Task App</h1>
                <div class="row">
                    <div class="col-md-12">
                        <form method="post" action="/saveTask" >
                        {{csrf_field()}}
                            <input type="text" name="task"  class="form-control" placeholder="Enter your Task"><br>
                            @foreach($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                            {{$error}}
                            </div>
                            @endforeach
                            <input type="submit" class="btn btn-primary" value="Save">
                            <input type="button" class="btn btn-warning" value="Clear">
                        </form>
                        <br>
                        <form action="">
                            <table class="table table-dark">
                                <tr>
                                    <th>No</th> 
                                    <th>Task</th>
                                    <th>is Completed</th>
                                    <th>Action</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>I have to sleep</td>
                                    <td>Not yet</td>
                                    <td><input class=" btn btn-primary" type="Submit" value="Mark as Completed"></input></td>
                                </tr>
                            </table>
                        </form>
                        
                    </div>
                </div>
        </div>
    </div>

</body>
</html>