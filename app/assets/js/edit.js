$(document).on('click', '#btnEdit', function (e) {
	let fileName = e.target.dataset.file

	$('#inputName').val(fileName)
	$.ajax({
		url: './app/db/edit.php',
		type: 'post',
		data: { fileName: fileName },
		success: function (response) {
			if (response) {
				console.log('okis')
			} else {
				console.log('todo me male sal')
			}
		},
	})
})
