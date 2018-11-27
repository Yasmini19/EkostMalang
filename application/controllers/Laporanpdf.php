<?php
Class Laporanpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A3');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(400,8,'Ekost Malang',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(400,8,'DAFTAR KOST',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'Id Kost',1,0);
        $pdf->Cell(40,6,'Nama Pemilik',1,0);
        $pdf->Cell(40,6,'Nama Kost',1,0);
        $pdf->Cell(100,6,'Alamat Kost',1,0);
        $pdf->Cell(27,6,'Lade',1,0);
        $pdf->Cell(27,6,'Lode',1,0);
        $pdf->Cell(27,6,'Tersedia',1,0);
        $pdf->Cell(70,6,'Fasilitas',1,0);
        $pdf->Cell(55,6,'Harga',1,1);
        $pdf->SetFont('Arial','',10);
        $kost = $this->db->get('kost')->result();
        foreach ($kost as $row){
            $pdf->Cell(20,6,$row->id_kost,1,0);
            $pdf->Cell(40,6,$row->id_user,1,0);
            $pdf->Cell(40,6,$row->nama_kost,1,0);
            $pdf->Cell(100,6,$row->alamat_kost,1,0);
            $pdf->Cell(27,6,$row->latitude,1,0);
            $pdf->Cell(27,6,$row->longitude,1,0);
            $pdf->Cell(27,6,$row->stok,1,0);
            $pdf->Cell(70,6,$row->fasilitas,1,0);
            $pdf->Cell(55,6,$row->harga,1,1); 
        }
        $pdf->Output();
    }
}