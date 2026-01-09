<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="{{ route('news.update',$news->id)}}" method="post">
        @csrf
        @method('PUT')
        <input name="name" type="text" value="{{ $news->name }}">
        <input name="title" type="text" value="{{ $news->title }}">
        <input type="submit" value="update">

    </form>
</body>
</html>