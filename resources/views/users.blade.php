<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<center><a class="btn btn-primary" href="/newuser">Add</a>
</center>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Details</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>


        </tr>
    </thead>

    @foreach ($users as $id => $u)
    <tr>
        <td> {{ $u->name }}
        </td>  
        <td>
            <a href="{{route('view.user',$u->id)}}">Details</a>
        </td>
        <td>
            <a href="{{route('update.page',$u->id)}}">Update</a>
        </td>
        <td>
            <a href="{{route('delete.user',$u->id)}}">Delete</a>
        </td>
    </tr>
            
    @endforeach


    </tbody>
</table>


