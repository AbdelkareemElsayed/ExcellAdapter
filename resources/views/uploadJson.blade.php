<!DOCTYPE html>
<html>
<head>
    <title>Import data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
</head>
<body>
    @include('messages')

<div class="container">
    <div class="card bg-light mt-3">
        <div class="card-header">
             Import products data ...
        </div>
        <div class="card-body">
            <form action="{{ route('importJson') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="file" name="file" class="form-control">
                <br>
                <button class="btn btn-success">Import  data</button>

            </form>
        </div>
    </div>
</div>
   
</body>
</html>