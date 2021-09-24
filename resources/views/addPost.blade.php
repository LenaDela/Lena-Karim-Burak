<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{route('storePost')}}" method="POST">
        
    @csrf
        
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" placeholder="Your title"><br>
        <label for="body">Body:</label><br>
        <input type="text" id="body" name="body" placeholder="Your Text"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>