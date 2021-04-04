<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
        <table class="table table-dark">
            <tr>
                <th>Name</th>
                <th>Surname</th>
                <th>Email</th>
                <th>Photo</th>
            </tr>
            @foreach($formtable as $item)
            <tr>
                <th>{{ $item->name }}</th>
                <th>{{ $item->surname }}</th>
                <th>{{ $item->email }}</th>
                <th>{{ $item->photo }}</th>
            </tr>
            @endforeach
        </table>
        
</body> 
</html>
