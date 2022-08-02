<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route("meetings")}}">
        <input type="text" placeholder="topic" name="topic"><br>
        <input type="datetime-local" placeholder="start_time" name="start_time"><br>
        <input type="text" placeholder="agenda" name="agenda"><br>
        <input type="submit"><br>
    </form>
</body>
</html>
