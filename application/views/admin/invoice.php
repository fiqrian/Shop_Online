<div class="container-fluid">
  <h4>Invoice pemesanan Produk</h4>
  <table class="table table-bordered table-hover table-striped">
  	<tr>
  	    <th>Id Invoice</th>
  	    <th>Nama Pemesanan</th>
  	    <th>Alamat Pengiriman</th>
  	    <th>Tanggal Pemesanan</th>	
  	    <th>Batas Pembayaran</th>
  	    <th >Detail</th>
        <th >Konfirmasi</th>
        <th >Hapus</th>
  	</tr>
  	<?php 	foreach ($invoice as $inv): ?>
  		<tr>
  		     <td><?php echo $inv->id?></td>
  		     <td><?php echo $inv->nama?></td>
  		     <td><?php echo $inv->alamat?></td>
  		     <td><?php echo $inv->tgl_pesan?></td>
  		     <td><?php echo $inv->batas_bayar?></td>
  		     <td align="center" > <?php echo anchor('admin/invoice/detail/'.$inv->id,'<div class="btn btn-sm btn-primary"><i class="fas fa-search-plus"></i></i></div>') ?></td>
           <td align="center"><?php echo anchor('admin/invoice/pesanan/'.$inv->id,'<div class="btn btn-primary"><i  class="fa fa-check-circle" ></i></div>') ?></td>
           <td align="center" ><?php echo anchor('admin/invoice/hapus_invoice/'.$inv->id,'<div class="btn btn-danger"><i class="fa fa-trash" ></i></div>') ?></td>

  		</tr>
  	<?php 	endforeach; ?>
  </table>	
</div>