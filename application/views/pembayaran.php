<div class="container-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="btn btn-sm btn-success">
				<?php $grand_total = 0;
				if($keranjang = $this->cart->contents())
				{
					foreach ($keranjang as $item) 
					{
						$grand_total = $grand_total + $item['subtotal'];
					}
					echo "<h5>Total Belanja Anda: Rp. ".number_format($grand_total,0,',','.' );
					?>	
				</div><br><br>	

				<h3>Input Alamat Pengiriman Dan Pembayaran</h3>
				<form method="post" class=" tombol-pesan" action="<?php echo base_url()?>.dashboard/proses_pesanan">
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input type="text" name="nama" placeholder="Nama Lengkap Anda"     required="" class="form-control">	
					</div>	
					<div class="form-group">
						<label>Alamat Lengkap</label>
						<input type="text" name="alamat" placeholder="Alamat Lengkap Anda" required=""  class="form-control">	
					</div>	
					<div class="form-group">
						<label>No. Telepon</label>
						<input type="text" name="no_telp" placeholder="Nomor Telepon Anda" required="" class="form-control">	
					</div>	
					<div class="form-group">
						<label>Jasa Pengiriman</label>
						<select class="form-control">	
							<option>POS INDONESIA</option>
							<option>JNE</option>
							<option>TIKI</option>
							<option>SICEPAT</option>
							<option>GOJEK</option>
							<option>GRAB</option>
						</select>	
					</div>
					<div class="form-group">
						<label>Bank Transfer</label>
						<select class="form-control">	
							<option>BCA -xxxxxx</option>
							<option>BRI -xxxxxx</option>
							<option>BNI -xxxxxx</option>
							<option>MANDIRI -xxxxxx</option>
						</select>	
					</div>
					<div align="right">
					<button type="submit" class="btn btn-sm btn-primary mb-5 " onclick="Swal.fire('Pesanan Berhasil', 'Pesanan Akan Diproses!', 'success')"><i class="fas fa-paper-plane ">Kirim</i></button>
						
					</div>
				</form>
				<?php 	
			}else
			{

				redirect("dashboard/keranjang_kosong");
			} 
			?>		
		</div>	
		<div class="col-md-2"></div>
	</div>	
</div>