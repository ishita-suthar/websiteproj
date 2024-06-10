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
<a href="ins"><button class="btn btn-dark">insert</button></a>
    <table class=" table table-dark table-hover" enctype="multipart/form-data">
<thead>
    <tr>
        <th>iamge</th>
        <th>name</th>
        <th>category</th>
        <th>price</th>
        <th>delete</th>
        <th>update</th>
        </tr>
</thead>
<tbody>
    @foreach($in as $sh)
    <tr>
        <td><img src="img/{{ $sh->image }}"height="60px"></td>
        <td>{{ $sh->name }}</td>
        <td>{{ $sh->category }}</td>
        <td>{{ $sh->price }}</td>
        <td><a href="delete/{{ $sh->id }}"><button>delete</button></a></td>
        <td><a href="update/{{ $sh->id }}"><button>update</button></a></td>
    </tr>
    @endforeach
</tbody>

    </table>
    
</body>
</html>