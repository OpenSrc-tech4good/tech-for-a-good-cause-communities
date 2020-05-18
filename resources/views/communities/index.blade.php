<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Communities</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/common.css">
  </head>
  <body>
    <div class="container">
    <h1>Communities</h1>
    <form action="/communities" method="post">
        <input type="" placeholder="" name=""/>
        <input type="" placeholder="" name=""/>
        <input type="" placeholder="" name=""/>
        <button type="submit">Add</button>
    </form>
    @foreach($data as $key)
      <div class="row">
        <div class="col-6 info">
          <h2>{{$key->name}}</h2>
          <p>{{$key->about}}</p>
        </div>
        <div class="col-6 actions">
          <a href="/communities/{{$key->id}}">View</a>
          <a href="/">Delete</a>
        </div>
      </div>
    </div>
    @endforeach
  </body>
</html>