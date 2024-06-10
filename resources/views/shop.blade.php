<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
    

<div class="container-fludi">
    <div class="row">
        <div class="col-md-4">
<img src="../img/{{ $sh->image}}" class="col-md-12 col-12">
</div>
        <div class="col-md-8">
<h1>{{ $sh->name}}</h1>
<p>{{ $sh->category}}</p>
<h3>{{ $sh->price}}</h3>
        </div>
    </div>
</div>
</body>
</html>