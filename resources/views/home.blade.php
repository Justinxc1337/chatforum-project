<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>

    @auth
    <header id="headercontainer">
        <p>You're logged in</p>
        <form action="/logout" method="POST">
            @csrf
            <button>Logout</button>
        </form>
    </header>

    <div style="border: 3px solid black;">
        <h2>Create a new post</h2>
        <form action="/create-post" method="POST">
            @csrf
            <input name="title" type="text" placeholder="title">
            <input name="body" type="text" placeholder="body content">
            <button>Create</button>
        </form> 
    </div>

    <div style="border: 3px solid black;">
        <h2>All Posts</h2>
        @foreach ($posts as $post)
        <div style="background-color: gray; padding: 10px; margin: 10px">
            <h3 style="text-decoration: underline">{{ $post->title }} by {{$post->user->name}}</h3>
            <p>{{ $post->body }}</p>
            <p><a href="/edit-post/{{$post->id}}">Edit Post</a></p>
            <form action="/delete-post/{{$post->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button>Delete Post</button>
            </form>
        </div>
    </div>
    @endforeach


    @else
    <div style="border: 3px solid black;">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <input name="name" type="text" placeholder="name">
            <input name="email" type="text" placeholder="email">
            <input name="password" type="password" placeholder="password">
            <button>Register</button>
        </form>
    </div>
    <div style="border: 3px solid black;">
        <h2>Login</h2>
        <form action="/login" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="name">
            <input name="loginpassword" type="password" placeholder="password">
            <button>Login</button>
        </form>
    </div>

    @endauth

    
    
</body>
</html>