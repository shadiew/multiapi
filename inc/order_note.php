<?php
require("../lib/mainconfig.php");

if (isset($_POST['service'])) {
	$post_sid = mysqli_real_escape_string($db, $_POST['service']);
	$check_service = mysqli_query($db, "SELECT * FROM services WHERE sid = '$post_sid' AND status IN ('Active','normal')");
	if (mysqli_num_rows($check_service) == 1) {
		$data_service = mysqli_fetch_assoc($check_service);
?>
						<div class="alert alert-info alert-dismissible show fade">
                            <b>Min. Order:</b> <?php echo number_format($data_service['min']); ?><br />
							<b>Max. Order:</b> <?php echo number_format($data_service['max']); ?><br />
							<b>Note:</b> <?php echo $data_service['note']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
	<?php
	} else {
	?>
						<div class="alert alert-daner alert-dismissible show fade">
                            <b>Error:</b> Service not found.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>



		
	<?php
	}
} else {
	?>
	<div class="alert alert-daner alert-dismissible show fade">
                            <b>Error:</b> Something went wrong.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
	
<?php
}
