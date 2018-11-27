<?php
Class Laporanpdf_p extends CI_Controller{
    
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
        $pdf->Cell(400,8,'DAFTAR Pelanggan',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(20,6,'No',1,0);
        $pdf->Cell(40,6,'Nama Pelanggan',1,0);
        $pdf->Cell(50,6,'Email',1,0);
        $pdf->Cell(40,6,'No KTP',1,0);
        $pdf->Cell(120,6,'Alamat',1,0);
        $pdf->Cell(27,6,'Jenis Kelamin',1,0);
        $pdf->Cell(50,6,'No HP',1,0);
        $pdf->Cell(55,6,'Kampus',1,1);
        $pdf->SetFont('Arial','',10);
        $kost = $this->db->get('pelanggan')->result();
        foreach ($kost as $row){
            $pdf->Cell(20,6,$row->id,1,0);
            $pdf->Cell(40,6,$row->nama,1,0);
            $pdf->Cell(50,6,$row->email,1,0);
            $pdf->Cell(40,6,$row->ktp,1,0);
            $pdf->Cell(120,6,$row->alamat,1,0);
            $pdf->Cell(27,6,$row->jenis_kelamin,1,0);
            $pdf->Cell(50,6,$row->no_hp,1,0);
            $pdf->Cell(55,6,$row->kampus,1,1); 
        }
        $pdf->Output();
    }
}