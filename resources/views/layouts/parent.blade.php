<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div> 
        <a href="">Active</a>
        <a href="">Default</a>
        <a href="">Default</a>
        <a href="">Default</a>
        @yield('menu')
    </div>

    
    <div>
        @yield('content')    
    </div>

    <div>
        <a href="">A</a>
        <a href="">B</a>
        <a href="">C</a>
    </div>

</body>
</html>