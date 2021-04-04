<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create new blog</title>
</head>
<body>
        <form method="POST" action="{{ route('create-form') }}">
            @csrf
            <input type="text" name="name" placeholder="name">
            <input type="text" name="surname" placeholder="surname">
            <input type="text" name="email" placeholder="email">
            <input type="file" name="photo" placeholder="photo">
            <input type="submit"></input>
        </form>
    
            
</body>
</html>