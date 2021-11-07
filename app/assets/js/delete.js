$(document).ready(function () {
	$('#btnDelete').click(function (e) {
		let fileUrl = e.target.dataset.file
		console.log(fileUrl)
		$.ajax({
			url: './app/db/delete.php',
			type: 'post',
			data: { filePath: fileUrl },
			success: function (response) {
				if (response) {
					console.log('hurra')
				} else {
					console.log('ouch')
				}
			},
		})
	})
})
