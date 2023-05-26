
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Trashed Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>



<table class="table m-lg-5">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Process</th>
    </tr>
  </thead>
  <tbody>
    @foreach ( $trashed_posts as $post  )

    <tr>
        <th scope="row">{{$post->id}}</th>
        <td><a href="{{route('posts.show',$post)}}">{{$post->title}}</a></td>
        <td>{{$post->body}}</td>

        <td>
            <a class="btn btn-primary" href="{{route('post.restore',$post->id)}}" role="button">Restore</a>

            <form class="btn btn-danger "  action="{{route('posts.destroy',$post)}}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger"  type="submit"> Delete</button>
            </form>
        </td>
    </tr>
    @endforeach


  </tbody>
</table>
{{-- <a class="btn btn-danger m-lg-5" href="{{route('posts.delete.all')}}" role="button">Delete All</a>
<a class="btn btn-danger m-lg-5" href="{{route('posts.delete.all.truncate')}}" role="button">Delete All Truncate</a> --}}
</body>
</html>
