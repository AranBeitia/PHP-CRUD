<?php 
	include 'functionFileBrowser.php';
	include 'functionGetSize.php';

	$id = 0;
	foreach(fileBrowser() as $item) { 
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
				<button type="button" class="btn btn-success">Edit</button>
				<button type="button" class="btn btn-danger">Delete</button>
			</div>
		</td>
	</tr>
	<?php } ?>
