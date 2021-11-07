<?php 
	include 'functionFileBrowser.php';
	include 'functionGetSize.php';

	$id = 0;
	foreach(fileBrowser() as $item) {
		if(pathinfo($item, PATHINFO_EXTENSION) !== ""){
			$fileName = basename($item);
			$fileType = pathinfo($item, PATHINFO_EXTENSION);
			$fileSize = getFileSize($item);
			$fileCreate =  date("Y-m-d H:m:s", filectime($item));
			$fileModify =  date("Y-m-d H:m:s", filemtime($item));
			$id++;
?>
	<tr>
		<th scope="row"><?php echo $id ?></th>
		<td>folder</td>
		<td class="text-truncate" style="max-width: 100px;"><?php echo $fileName; ?></td>
		<td><?php echo $fileType; ?></td>
		<td><?php echo $fileSize; ?></td>
		<td><?php echo $fileCreate; ?></td>
		<td><?php echo $fileModify; ?></td>
		<td>
			<div class="btn-group btn-group-sm" role="group" aria-label="Basic mixed styles example">
				<button id="btnEdit" type="button" class="btn btn-success" data-file="<?php echo $fileName; ?>">Edit</button>
				<button id="btnOpen" type="button" class="btn btn-info" data-file="<?php echo $item; ?>">Open</button>
				<button id="btnDelete" type="button" class="btn btn-danger" data-file="<?php echo $item; ?>">Delete</button>
			</div>
		</td>
	</tr>
	<?php }} ?>

	<script src="./app/assets/js/delete.js"></script>
	<script src="./app/assets/js/edit.js"></script>

