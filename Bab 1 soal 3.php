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

	public function hargaSecond ()
	{
		if ($this->tahunPembuatan > 2010) $second = $this->harga * 20/100;
		else if ($this->tahunPembuatan > 2010) $second = $this->harga * 30/100;
			else $second = $this-> harga *40/100;
			return $second;
		}
}
?>
