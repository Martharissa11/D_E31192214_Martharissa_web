<?php
// Buat Class
class Sepatu {
	//properties
	public $jenisSepatu;
	public $warna;
	public $merk;
	public $bahanSepatu;
	public $harga;

	public function statusHarga()
	{
		if ($this->harga > 200000) $status = 'Mahal';
		else $status = 'Murah';
		return $status;
	}

	public function jumlahPakaian()
	{
		if ($this->jumlahPakaian > 10) $jumlah = 'Banyak';
		else $jumlah = 'Sedikit';
		return $jumlah;
	}
	
	public function Merk()
	{
		if ($this->merk = 'Nike') $merk = 'Terkenal';
		else $merk = 'Kurang erkenal';
		return $merk;
		
	}
}
?>
