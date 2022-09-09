<!DOCTYPE>
<html>
    <head>
        <title>Upload Image</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <style>
            .submit{
                margin-top: 10px;
            }
            .row{
                margin-top: 30px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="row justify-content-md-center row">
                <div class="col-4">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif
                    <div class="card">
                        <h5 class="card-header">Upload Image</h5>
                        <div class="card-body">
                            <form action="uploadimage" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="file" name="image" required/>
                                <input type="submit" class="btn btn-primary btn-sm submit" name="submit" value="Upload"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
