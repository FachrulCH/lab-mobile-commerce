<?php
    $acc = isset($_GET['acc']) ? $_GET['acc'] : '98989898';
?>
<style> input {	background-color:#0000ff; border-bottom:solid 1px #cccccc; border-top:0px; border-right:0px; border-left:0px; color:#cccccc; }</style>
<div id="outer" style="width:435px;">
	<div id="outer" style="width:435px;height:400px;background-image:url('diebold-cropped.png');">
		<div id="inner" style="color:#cccccc;font-family:Arial;font-size: small;padding-left: 100px;padding-top: 50px; width: 250px;">
			<form action="confirm_transfer.php" method="post">
				<h1>Transfer</h1>
				<div>
					Rek Asal:
					<?php echo $acc;?>
					<br/>
					Rek Tujuan:
					<input type="text" name="vanumber" id="vanumber"/>
					<br/>
					Jumlah:
					<input type="text" name="amount" id="amount"/>
					<br/>
					<input type="hidden" name="acc" id="acc" value="<?php echo $acc; ?>
					"/>
					<br/>
					&gt;
					<input type="submit" value="Kirim" style="color:#cccccc; border:0px;"/>
				</div>
			</form>
		</div>
	</div>
</div>