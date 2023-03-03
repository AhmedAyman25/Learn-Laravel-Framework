<h1> create New Post</h1>
<form action="{{route('post.insert')}}" method="POST">
    @csrf
    <input type="text" placeholder="enter title" name="title"> <br><br>
    <input type="text" placeholder="enter body" name="body"> <br><br>
    <button type="submit">submit</button>
</form>
