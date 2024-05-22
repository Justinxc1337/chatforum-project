<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="/edit-post/{{$post->id}}" method="POST">
        @csrf
        @method('PUT')
        <input name="title" type="text" placeholder="title" value="{{$post->title}}">
        <input name="body" type="text" placeholder="body content" value="{{$post->body}}">
        <button>Save Changes</button>
    </form>
</body>
</html>