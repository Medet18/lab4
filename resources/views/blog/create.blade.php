<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new post</title>
</head>
<body>
    <form method="POST" action="{{ route('add-post')}}">
        @csrf
        <input type="text" name="title" placeholder="title"><br><br>
        <input type="text" name="body" placeholder="body"><br><br>
        <button type="submit">Create</button>
    </form>
    
</body>
</html>