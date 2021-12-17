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

    <title>AdminCrud</title>
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-header">
                    Data Insert
                </div>
                <div class="card-body">
                    @if(Session::has('post_inserted'))
                        <div class="alert alert-success" role = "success">
                            {{Session::get('post_inserted')}}
                        </div>
                    @endif
                <form action = "{{route('add-post')}}" method = "post">
                        @csrf
                        <div class="card-body">
                        <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="fname" name= "Name">
                            </div>
                            <div class="mb-3">
                                <label for="text" class="form-label">Phone</label>  
                                <input type="text" class="form-control" id="lname" name="phone">
                            </div>
                            <div class="mb-3">
                                <label for="number" class="form-label">Quantity</label>  
                                <input type="number" class="form-control" id="lname" name="quantity">
                            </div>
                            <div class="mb-3">
                                <label for="number" class="form-label">Price</label>  
                                <input type="number" class="form-control" id="lname" name="price">
                            </div>                  
                            <button type="submit" class="btn btn-success">Submit</button>    
                            <a href="/admin" class="btn btn-success">Back to Main</a>       
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>