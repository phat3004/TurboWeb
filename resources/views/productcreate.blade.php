<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('users.store')}}" method="post">@csrf
        Avarta:   <input type="text" name="Avarta"><br>
        Name:     <input type="text" name="Name"><br>
        Password: <input type="text" name="Password"><br>
        Story:    <input type="text" name="Story"><br>
        Status:   <input type="number" name="Status"><br>
        <input type="submit">
    </form>
</body>
</html>