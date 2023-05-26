<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Edit Post</title>
</head>
<body>

    <form class="m-5" action="{{route('posts.update',$post->id)}}" method="POST">
        @csrf
        @method('PUT')
  <div class="mb-3">
    <input type="text" name="PostName" value="{{$post->title}}"  class="form-control" >
  </div>

  <div class="mb-3">
    <input type="text" name="PostBody" value="{{$post->body}}" class="form-control" >
  </div>

<center>  <button type="submit" class="btn btn-primary mx-auto p-2">Submit</button> </center>
</form>
</body>
</html>