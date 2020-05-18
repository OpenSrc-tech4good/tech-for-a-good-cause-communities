<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document | Communities</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/common.css">
</head>
<body>
    <div class="container">
    <h1><b>{{$data->name}}</b></h1>
    <hr>
    <p>{{$data->about}}</p>
    <a class="btn btn-primary" href="{{$data->link}}">Join</a>
    <a href="/communities">Back to list</a>
    </div>
</body>
</html>