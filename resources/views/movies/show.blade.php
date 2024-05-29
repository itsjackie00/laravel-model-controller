<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $movie->title }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">{{ $movie->title }}</h1>
                        <p class="card-text">{{ $movie->description }}</p>
                        <a href="/" class="btn btn-primary">Back to list</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
