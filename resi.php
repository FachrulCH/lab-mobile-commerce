<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<html>
	<!-- Header -->
	<?php 	include 'header.php';
			include_once "model/db_function.php"; ?>
	
	<body>
		<!-- Start of first page: #home -->
		<div data-role="page" id="home" class="latar">
			<div data-role="header" data-theme="b">
				<h1></h1>
				<a href="#" data-icon="carat-l" data-rel="back" data-theme="b" data-iconshadow="true" class="ui-btn-left"> <span class="ui-btn-text">Back</span>
				</a>
				</div><!-- /header -->
				<div role="main" class="ui-content">
<?php
$date 	= date('d/m/Y')."<br/>";
$time 	= date('h:i:s a', time())."<br/>";
$va 	= $_GET['va']."<br/>";
$total 	= html_price($_GET['t'])."<br/>";

?>
<div class="ui-body ui-body-a">
<p>Terima kasih Anda telah berbelanja di mobile.naikgunung.com.</p>
<p>Berikut ini adalah informasi order yang telah berhasil tersimpan :</p>
	<pre>  
	  Tanggal           :  <?= $date; ?>
	  Jam               :  <?= $time; ?>
	  Nama Rekening     :  Naikgunung.com
	  Rekening Tujuan   :  <?= $va; ?>
	  Nominal           :  <?= $total; ?>
	  Metode Pembayaran :  VIRTUAL ACCOUNT
	  No. Referensi     :  8BC79FD4-A999-5883-34BD-B44FB811713C
	  Status            :  Belum dibayar
	</pre>
<p>Semoga anda senang berbelanja di naikgunung.com, kami menanti kunjungan anda kembali.</p>
<p>Terima kasih.</p>

<p><b>Hormat Kami,</b></p>
<p><u>Naikgunung.com</u></p>
</div>
				</div>
				<!-- /content -->
				<!-- Footer -->
				<?php include 'footer.php'; ?>
			</div>
			<!-- /page one -->
			<!-- /page halaman -->
		</body>
	</html>
	<? ob_flush();?>