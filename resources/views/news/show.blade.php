<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>id</td>
            <td>name</td>
            <td>title</td>
        </tr>
        <tr>
            <td>{{ $news->id }}  </td>
            <td>{{ $news->name }}  </td>
            <td>{{ $news->title }}  </td>
        </tr>
    </table>
</body>
</html>