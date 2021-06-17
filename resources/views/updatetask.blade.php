<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Update Task</title>
</head>
<body>
    <div class="container">
        <div class="text-center">
            <h1>Update Task</h1>
            <div class="row">
                <div class="col-md-12">
                    <form action="/updatetask" method="post">
                    {{csrf_field()}}
                        <input type="text" class="form-control" name="updatetask" value="{{$taskdata->task}}"/>
                        <input type="hidden" name="id" value="{{$taskdata->id}}"/>
                        <br>
                            @foreach($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                            {{$error}}
                            </div>
                            @endforeach
                        <input type="submit" class="btn btn-primary" value="Update"/>
                        <input type="button" class="btn btn-warning" value="Cancel"/>
                    </form>
                </div>
            </div>    
        </div>
    </div>
    
</body>
</html>