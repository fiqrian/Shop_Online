const flashData = $('.flash-data').data('kosong');
 if (flashData) {
	Swal.fire(
		'Keranjang Kosong!!',
		'Silahkan Lanjut Belanja!' + flashData, 
	    'warning'
	);
}
const pesan = $('.pesan').data('flashdata');

if (pesan) {
	Swal.fire(
		'Pesanan Berhasil Diproses!!',
		'Silahkan Untuk Lanjutkan Pembayaran!' + pesan, 
	    'success'
	);
}

document.querySelector('.third').addEventListener("click", function(){
	Swal.fire(
				'TERSIMPAN', 
				'DATA BARANG TERSIMPAN!!', 
				'success'
				);
  });

  $(document).on('click','.first', function (e){
	  e.preventDefault();
	Swal.fire('Pesanan Berhasil', 'Pesanan Akan Diproses!', 'success');
  });
  
  document.querySelector('.second',function()
  {
	Swal.fire('Keranjang kosong !!', 'Silahkan lanjut Belanja!', 'warning');
  });

  document.querySelector(".fourth").addEventListener("click", function() {
	Swal.fire{
	  title: "Yakin Keluar ?",
	  showCancelButton: true,
	  confirmButtonText: "Confirm",
	  confirmButtonColor: "#00ff99",
	  cancelButtonColor: "#ff0099"
	}
  });
