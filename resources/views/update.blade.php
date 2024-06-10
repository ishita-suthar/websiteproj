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
<form class="bg-success py-5" method="post" action="\upp" enctype="multipart/form-data">
@csrf
<input type="hidden" name="id" value="{{ $sh->id}}">
<br><br>
<input type="file" class="form-control" placeholder="image" name="pimg" value="{{ $sh->image }}">
<br><br>
<input type="text" class="form-control" placeholder="name" name="pname" value="{{ $sh->name }}">
<br><br>
<select placehoder="category" class="form-control" name="scategory" value="{{ $sh->category }}">
    <option>sunscreen</option>
    <option>moisturizer</option>
    <option>bodylotion</option>
    <option>clesanser</option>
</select>
<br><br>
<input type="text" class="form-control" placeholder="price" name="ppri" value="{{ $sh->price }}">
<br><br>
<button type="submit" name=" sub" class="btn btn-outline-dark"> submit</button>
</form>
</body>
</html>