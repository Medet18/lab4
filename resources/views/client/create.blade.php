<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new Client</title>
</head>
<body>
    <form method="POST" action="{{ route('add-client')}}">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="lastname" placeholder="lastname">
        <input type="text" name="age" placeholder="age">
        <button type="submit">create</button>
    </form>
    
</body>
</html>