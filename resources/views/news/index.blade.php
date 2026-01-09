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
            <td>delete</td>
        </tr>
    @forelse ($news as $n)
        
            <tr>
                <td>{{$n->id}}</td>
                <td>{{$n->name}}</td>
                <td>{{$n->title}}</td>
                <td><a href="{{ route('news.edit',$n->id)}}">edit</a></td>
                <td><a href="{{ route('news.show',$n->id)}}">show</a></td>
                <td>
                    <form action="{{ route('news.destroy',$n->id) }}" method="post">
                       @csrf
                       @method('DELETE')
                        <input type="submit" value="delete">
                    </form>
                </td>
              
            </tr>
        
        
    </table>
   
        
    @empty
       
        
    @endforelse
    
</body>
</html>