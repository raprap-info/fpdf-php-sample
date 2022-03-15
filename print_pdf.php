<?php
require "fpdf.php";

$db= connections here;

class myPDF extends FPDF{
    function header(){
        $this->Image('logo.png',10,6);
        $this->SetFont('Arial','B',14);
        Sthis->Cell(276,5,'EMPLOYEE DOCUMENTS',0,0, 'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Cell(276,10, 'Street Address of Employee Office',0,0,'C');
        Sthis->Ln(20);
        }
        
    function footer(){
        Sthis->SetY(-15);
        Sthis->SetFont('Arial','',8);
        $this->Cell(0,10, 'Page '.$this->PagelNo().'/{nb}',0,0,'c');
        
        }
    function headerTable(){
      
    Sthis->SetFont('Times','B',12);
    $this->Cell(20,10,'ID',1,0,'C');
    $this->Cell(40,10,'Name',1,0,'C');
    $this->Cell(40,10,'Position',1,0,'C');
    $this->Cell(60,10,'Office',1,0,'C');
    $this->Cell(36,10, 'Age',1,0,'c');
    $this->Cell(3¢, 10,'Start Date',1,0,'C');
    $this->Cell(20,10,'Salary',1,0,'c');
    
    }
    
    function viewTable($db){
    Sthis->SetFont('Times','',12);
    $stmt = $db->query('select * from tablepaginate');
    while($data - $stmt->fetch(PD0::FETCH_OBJ)){
        $this->Cell(20,10,'ID',1,0,'C');
        Sthis->Cell(4e,10, 'Name',1,0,'c');
        Sthis->Cell(40,10, 'Position',1,8,'c');
        Șthis->Cell(60, 10, 'Office',1,e,'c');
        Sthis->Cell(36,10, 'Age",1,e,'c');
        Șthis->Cell(30, 10, 'Start Date',1,0, 'c');
   Bthis->Cell(5@,10,'Salary',1,0,'c');
    
    }
                                                                       
$pdf = new myPDF( );
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
$pdf->headerTable();
$pdf->viewTable();
$pdf->viewTable($db);
$pdf->Output();
