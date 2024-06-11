<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("assets/vendor/bootstrap-5.0.2-dist/css/bootstrap.min.css") }}"/>
    @yield("other-css")
    <title>Pabwe App</title>
</head>
<body>
<div class="container-fluid">
    @yield("content")
</div>

@yield("other-js")
</body>
</html>
