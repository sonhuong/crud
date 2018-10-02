
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<h3>Đăng nhập</h3>
<div class="container">
    <form method="post" action="{{url('dangnhap')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="sr-only" for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email"  name="email">
        </div>
        <div class="form-group">
            <label class="sr-only" for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>
    </form>
</div>

</body>
</html>