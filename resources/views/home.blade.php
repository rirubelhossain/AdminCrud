<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>

    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        @if(Session::has('post_deleted'))
                            <div class="alert alert-success" role = "success">
                                {{Session::get('post_deleted')}}
                            </div>
                        @endif

                        <div class="card-header">
                            All Posts
                            
                        </div>
                        <div>
                            <a href="/admin" class="btn btn-success">Admin Panel</a>
                        </div>
                        <!-- <div>
                            <a href="/add" class="btn btn-success">Add New Data</a>
                        </div> -->
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Phone</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <!-- <th>Action</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                @foreach($posts as $post)
                                        <tr>
                                            <td>{{$post->name}}</td>
                                            <td>{{$post->phone}}</td>
                                            <td>{{$post->quantity}}</td>
                                            <td>{{$post->price}}</td>
                                            <!-- <td>
                                                <a href="/view/{{$post->id}}" class="btn btn-success">View</a>
                                                <a href="/edit-post/{{$post->id}}" class="btn btn-info">Edit</a>
                                                <a href="/delete-post/{{$post->id}}" class="btn btn-danger">Delete</a>
                                            </td> -->
                                        </tr>
                                    @endforeach
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>