<?php
// Buat Class
class Kendaraan {
	//properties
	public $jenisKendaraan;
	public $jumlahRoda;
	public $merk;
	public $bahanBakar;
	public $harga;
	public $tahunPembuatan;

	public function statusSubsidi()
	{
		if ($this->bahanBakar = 'premium' && $this->tahunPembuatan < 2005) $status = 'ya';
		else $status = 'Tidak';
		return $status;
	}
}
?>