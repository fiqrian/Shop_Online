
<div class="container-fluid">
  <h4>Invoice pemesanan Produk</h4>
  <table class="table table-bordered table-hover table-striped">

		<center>
			<h2>Silahkan Klik</h2>
		<div class="form-group">
		<a  class="btn btn-primary" href="<?php echo base_url('dashboard/cek_pesanan'); ?>"><i class="fas fa-money-bill-wave"> Lanjut Pembayaran</i></a>
		</div>
		</center>
  	<tr>
  	  
  	</tr>
  </table>	
</div>
<!-- <div class="container-fluid">
	<div class="alert alert-light">
		<p class="text-center align-middle first">Selamat, Pesanan anda telah Berhasil diproses!!!</p>
		<h4>Detail Pesanan</h4>		
			<table class="table table-bordered table-hover table-striped">
		<tr>
			<th>Id Barang</th>
			<th>Nama Produk</th>
			<th>Jumlah Pesanan</th>
			<th>Harga Satuan</th>
			<th>Sub-total</th>
		</tr>
		<?php
		$total = 0;
		  foreach ($pesanan as $psn):
		        $subtotal = $psn->jumlah * $psn->harga;
		        $total   += $subtotal 
		 ?>
		 <tr>
		 	<td><?php echo $psn->id_brg ?></td>
		 	<td><?php echo $psn->nama_brg ?></td>
		 	<td><?php echo $psn->jumlah ?></td>
		 	<td align="right">Rp.<?php echo number_format($psn->harga,0,',','.')?></td>
		 	<td align="right">Rp.<?php echo number_format($subtotal,0,',','.') ?></td>	
		 </tr>
		<?php endforeach; ?>
		<tr>
			<td colspan="4" align="right">Total</td>
			<td  align="right">Rp.<?php echo number_format($total,0,',','.') ?></td>
		</tr>
	</table>
			
		<center>
			<h2>Silahkan Klik</h2>
		<div class="form-group">
		<a  class="btn btn-primary" href="<?php echo base_url().'index.php/download/lakukan_download' ?>">CETAK</a>
		</div>
		</center>


	</div>	
</div>	
</div>	

 -->