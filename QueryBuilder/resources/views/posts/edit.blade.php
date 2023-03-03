<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Post</title>
</head>
<body>

<h1> Edit Post: {{$post->title}}</h1>

<form action="{{route('post.update',$post->id)}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" value="{{$post->title}}" name="title"> <br><br>
    <input type="text" value="{{$post->body}}"  name="body"> <br><br>
    <button type="submit">submit</button>
</form>

</body>
</html>