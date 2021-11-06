<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP-CRUD</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css"/>
	<link rel="stylesheet" type="text/css" href="./app/assets/css/main.css"/>

	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
	<script src="./app/assets/js/main.js"></script>
</head>
<body>
	<header>
		<nav class="navbar sticky-top navbar-dark bg-dark">
			<div class="container-fluid">
				<h1 class="text-center text-light">PHP DEMO</h1>
				<h4 class="text-center text-light">CRUD with <span class="badge bg-info text-dark">DATATABLES</span></h4>
			</div>
		</nav>
	</header>
	<main class="container">
		<div class="row">
			<div class="col-lg-12">
				<button id="btnAdd" type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add</button>
			</div>
		</div>
		<div class="row">
			<table id="tableFiles" class="table table-dark table-striped">
				<thead>
					<tr>
						<th scope="col">#</th>
						<th scope="col">Folder</th>
						<th scope="col">File name</th>
						<th scope="col">Type</th>
						<th scope="col">Size</th>
						<th scope="col">Actions</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">1</th>
						<td>Mark</td>
						<td>Otto</td>
						<td>@mdo</td>
						<td>@mdo</td>
						<td>
							<div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
								<button type="button" class="btn btn-success">Edit</button>
								<button type="button" class="btn btn-danger">Delete</button>
							</div>
						</td>
					</tr>
					<tr>
						<th scope="row">2</th>
						<td>Jacob</td>
						<td>Thornton</td>
						<td>@fat</td>
						<td>@fat</td>
						<td>
							<div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
								<button type="button" class="btn btn-success">Edit</button>
								<button type="button" class="btn btn-danger">Delete</button>
							</div>
						</td>
					</tr>
					<tr>
						<th scope="row">3</th>
						<td colspan="2">Larry the Bird</td>
						<td>@twitter</td>
						<td>@twitter</td>
						<td>
							<div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
								<button type="button" class="btn btn-success">Edit</button>
								<button type="button" class="btn btn-danger">Delete</button>
							</div>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</main>

	<!-- Modal -->
	<article class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<form id="formFiles">
						<div class="mb-3">
							<label for="inputName" class="form-label">Change name</label>
							<input type="text" class="form-control" id="inputName" aria-describedby="nameHelp">
							<div id="nameHelp" class="form-text">This is an info / help text example</div>
						</div>
						<div class="mb-3">
							<label for="inputFile" class="form-label">Upload file</label>
							<input type="file" class="form-control" id="inputFile">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-dark">Submit</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</article>

</body>
</html>