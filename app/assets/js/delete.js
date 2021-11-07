$(document).on('click', '#btnDelete', function (e) {
	let row = $(this)
	let fileUrl = e.target.dataset.file

	$.ajax({
		url: './app/db/delete.php',
		type: 'post',
		data: { filePath: fileUrl },
		success: function (response) {
			if (response) {
				row.parents('tr').remove()
				// loadTable()
			} else {
				console.log('now')
			}
		},
	})
})
