<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Add User</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <h2>Add New User</h2>

            <form action="{{route('addUser')}}" method="post">
                @csrf
                <label>Name</label>
                <input type="text" name="name" >
                <label>Email</label>
                <input type="text" name="email">

                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
    
</body>
</html>