<html>
<head>
    <title>Laravel Image Upload</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class='container'>
        <div class="panel panel-primary">
            <div class='panel-heading'>
                <h2>Asraf Coder Image Upload</h2>
            </div>
            <div class='panel-body'>
                <form method='POST' enctype="multipart/form-data" action="/">
                    @csrf
                    <div class="row">
                        <div class='col-md-6'>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class='col-md-6'>
                            <button type='submit' class='btn btn-success'>Upload</button>
                        </div>
                    </div>
                    @if (count($errors) > 0)
                        <div class='alert alert-danger'>
                            <strong>Whoops! There are problems in uploading the image.</strong>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <strong>{{ $message }}</strong>
                        </div>
                        <img src="{{ Session::get('image') }}" width='1920' height='1080'>
                    @endif
                </form>
            </div>
        </div>
    </div>
</body>
</html>
