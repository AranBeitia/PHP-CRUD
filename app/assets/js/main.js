let CRUDModal = new bootstrap.Modal(document.getElementById('CRUDModal'))
// DATATABLE
$(document).ready(function () {
	let tableFiles = $('#tableFiles').DataTable({
		columnDefs: [
			{
				targets: -1,
				data: null,
				defaultContent: `
				<div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
					<button type="button" class="btn btn-success">Edit</button>
					<button type="button" class="btn btn-danger">Delete</button>
				</div>
			`,
			},
		],
	})
})

// BUTTON ADD
$('#btnAdd').click(function () {
	$('#formFiles').trigger('reset')
	$('.modal-header').css('background-color', '#28a745')
	$('#modalTitle').text('Add new file')
	$('#modalTitle').css('color', 'white')
	$('#changeName').hide()
	CRUDModal.show()
})

// FORM SUBMIT
$(document).ready(function () {
	$('#formFiles').submit(function (e) {
		e.preventDefault()
		var fd = new FormData()
		var files = $('#inputFile')[0].files

		if (files.length > 0) {
			fd.append('file', files[0])

			$.ajax({
				url: './app/db/update.php',
				type: 'post',
				data: fd,
				contentType: false,
				processData: false,
				success: function (response) {
					if (response) {
						console.log('response')
						// Swal.fire({
						// 	icon: 'success',
						// 	title: 'File updated',
						// 	showConfirmButton: false,
						// 	timer: 1500,
						// })
						// //?recharge table
						// loadTable()
					} else {
						console.log('nooooou')
						// Swal.fire({
						// 	icon: 'error',
						// 	title: 'Oops...',
						// 	text: 'Something went wrong!',
						// })
					}
				},
			})
		} else {
			console.log('error')
			// Swal.fire({
			//   icon: "error",
			//   title: "Oops...",
			//   text: "Something went wrong!",
			// });
		}
	})
})
