<!-- Modal -->
<article class="modal fade" id="CRUDModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="modalTitle">Modal title</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<form id="formFiles" method="post" enctype="multipart/form-data">
					<div class="mb-3" id="changeName">
						<label for="inputName" class="form-label">Change name</label>
						<input type="text" class="form-control" id="inputName" aria-describedby="nameHelp">
						<div id="nameHelp" class="form-text">This is an info / help text example</div>
					</div>
					<div class="mb-3" id="uploadFile">
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

<script src="./app/assets/js/add.js"></script>
