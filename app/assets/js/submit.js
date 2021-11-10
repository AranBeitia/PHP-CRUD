// FORM SUBMIT(add/edit)
$(document).ready(function () {
	$('#formFiles').submit(function (e) {
		e.preventDefault()
		var fd = new FormData()
		var files = $('#inputFile')[0].files
		if (files.length > 0) {
			fd.append('file', files[0])

			$.ajax({
				url: './app/db/submit.php',
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
						loadTable()
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
