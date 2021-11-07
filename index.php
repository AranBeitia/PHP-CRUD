<?php include './app/php/head.php'; ?>
<body>
	<header>
		<nav class="navbar sticky-top navbar-dark bg-dark">
			<div class="container-fluid">
				<h1 class="text-center text-light">PHP DEMO</h1>
				<h4 class="text-center text-light">CRUD with <span class="badge bg-info text-dark">DATATABLES</span></h4>
			</div>
		</nav>
	</header>
	<main class="container-fluid">
		<div class="row my-1">
			<div class="col-lg-12">
				<button id="btnAdd" type="button" class="btn btn-success">Add</button>
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
						<th scope="col">Creation date</th>
						<th scope="col">Modification date</th>
						<th scope="col">Actions</th>
					</tr>
				</thead>
				<tbody>
					<?php include './app/php/table.php'; ?>
				</tbody>
			</table>
		</div>
	</main>
	<?php include './app/php/modal.php'; ?>
	<script src="./app/assets/js/loadTable.js"></script>
</body>
</html>