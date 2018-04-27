<<!DOCTYPE html>
<html>
<head>

    <title>Page Title</title>

</head>
<body>
<ul>
    @foreach ($tasks as $task)
        <li>{{$task->body}}</li>
    @endforeach
</ul>
</body>
</html>