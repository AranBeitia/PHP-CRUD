let CRUDModal = new bootstrap.Modal(document.getElementById('CRUDModal'))
// DATATABLE
$(document).ready(function () {
	let tableFiles = $('#tableFiles').DataTable({})
})

// BUTTON ADD
$('#btnAdd').click(function () {
	$('#formFiles').trigger('reset')
	$('.modal-header').css('background-color', '#28a745')
	$('#modalTitle').text('Add new file')
	$('#modalTitle').css('color', 'white')
	$('#changeName').hide()
	$('#uploadFile').show()
	CRUDModal.show()
})

// BUTTON EDIT
$(document).on('click', '#btnEdit', function () {
	$('.modal-header').css('background-color', '#007bff')
	$('#modalTitle').text('Change name')
	$('#modalTitle').css('color', 'white')
	$('#uploadFile').hide()
	$('#changeName').show()
	CRUDModal.show()
})
