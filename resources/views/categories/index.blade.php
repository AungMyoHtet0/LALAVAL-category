<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Name List</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card-title mt-3">
			<h1>Name List</h1>
			</div>
			<div class="card-body mt-3">
				<a class="btn btn-success" href="/category/create">Create Category</a>
			</div>
			<div class="card mt-5">
				@foreach ($categorys as $category)
				<div class="card-title">
					<div class="card-header">
						<a class="text-decoration-none text-black" href="/category/{{$category->id}}"><h3>{{$category->name}}</h3></a>
					</div>
				<a class="text-decoration-none text-black" href="/category/{{$category->id}}">
				</a>
					<div class="card-footer">
						<p>{{$category->updated_at}}</p>
						<form action="/category/{{$category->id}}" method="POST">
							@csrf
							@method('DELETE')
							<button class="btn btn-danger" type="submit" onclick="return confirm('Are You Sure?')">DELETE</button>
						</form>
						<a class="btn btn-primary mt-3" href="/category/{{$category->id}}/edit">Edit</a>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>