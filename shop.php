<?php
include_once 'navbar.php';
?>

	<div class="hero-wrap hero-bread" style="background-image: url('images/bg_1.jpg');">
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
				<div class="col-md-9 ftco-animate text-center">
					<p class="breadcrumbs"><span class="mr-2"><a href="index.html">SHOPPING</a></span> <span>BELLOW</span></p>
					<h1 class="mb-0 bread">ORDER NOW</h1>
				</div>
			</div>
		</div>
	</div>


	<section class="ftco-section ftco-cart">
		<div class="container">
			<div class="row">
				<div class="col-md-12 ftco-animate">
					<?php
					require_once 'admin/dbkoneksi.php';
					?>
					<form method="POST" action="checkout.php">
						<div class="form-group row">
							<label for="tanggal" class="col-4 col-form-label">Tanggal Pesanan</label>
							<div class="col-8">
								<div class="input-group">
									<!-- <div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fa fa-anchor"></i>
										</div>
									</div> -->
									<input id="tanggal" name="tanggal" type="date" class="form-control" value="">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="nama_pemesan" class="col-4 col-form-label">Nama Pemesan</label>
							<div class="col-8">
								<div class="input-group">
									<!-- <div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fa fa-adjust"></i>
										</div>
									</div> -->
									<input id="nama_pemesan" name="nama_pemesan" type="text" class="form-control" value="">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="alamat_pemesan" class="col-4 col-form-label">Alamat</label>
							<div class="col-8">
								<div class="input-group">
									<!-- <div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fa fa-adjust"></i>
										</div>
									</div> -->
									<input id="alamat_pemesan" name="alamat_pemesan" type="text" class="form-control" value="">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="no_hp" class="col-4 col-form-label">Nomor Handphone</label>
							<div class="col-8">
								<div class="input-group">
									<!-- <div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fa fa-arrow-circle-up"></i>
										</div>
									</div> -->
									<input id="no_hp" name="no_hp" value="" type="text" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="email" class="col-4 col-form-label">Email</label>
							<div class="col-8">
								<div class="input-group">
									<!-- <div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fa fa-arrow-circle-up"></i>
										</div>
									</div> -->
									<input id="email" name="email" value="" type="email" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="jumlah_pesanan" class="col-4 col-form-label">Jumlah Pesanan</label>
							<div class="col-8">
								<div class="input-group">
									<!-- <div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fa fa-arrow-circle-up"></i>
										</div>
									</div> -->
									<input id="jumlah_pesanan" name="jumlah_pesanan" value="" type="text" class="form-control">
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="deskripsi" class="col-4 col-form-label">Deskripsi Pesanan</label>
							<div class="col-8">
								<div class="input-group">
									<!-- <div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fa fa-arrow-circle-up"></i>
										</div>
									</div> -->
									<textarea name="deskripsi" id="deskripsi" cols="100" rows="5"></textarea>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<label for="produk_id" class="col-4 col-form-label">Produk ID</label>
							<div class="col-8">
								<div class="input-group">
									<!-- <div class="input-group-prepend">
										<div class="input-group-text">
											<i class="fa fa-arrow-circle-up"></i>
										</div>
									</div> -->
									<!-- <input id="produk_id" name="produk_id" value="" type="text" class="form-control"> -->
									<select class="form-control" name="produk_id" id="produk_id">
										<option value="">Choose what you need!</option>
										<?php
										$sql = "SELECT id, nama FROM produk";
										$stmt = $dbh->prepare($sql);
										$stmt->execute();
										while ($row = $stmt->fetch()) {
											echo "<option value='" . $row['id'] . "'>" . $row['nama'] . "</option>";
										}
										?>
									</select>
								</div>
							</div>
						</div>
						<div class="form-group row">
							<div class="offset-4 col-8">
								<input type="submit" name="proses" type="submit" class="btn btn-primary" value="Buy Now">
							</div>
						</div>
					</form>
				</div>
			</div>
	</section>

	
	<?php
	include_once 'footer.php';
	?>

	<script>
		$(document).ready(function() {

			var quantitiy = 0;
			$('.quantity-right-plus').click(function(e) {

				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				$('#quantity').val(quantity + 1);


				// Increment

			});

			$('.quantity-left-minus').click(function(e) {
				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				// Increment
				if (quantity > 0) {
					$('#quantity').val(quantity - 1);
				}
			});

		});
	</script>

</body>

</html>