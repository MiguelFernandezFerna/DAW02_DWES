<?php
    require("../../fpdf/fpdf.php");
    class PDF extends FPDF{
        function Header(){
            $this->Image('logo.png',10,8,33);
            $this->SetFont('Arial','B',12);
            $this->Cell(130,20,"Miguel Fernandez",0,0,'C');
        }

        function Footer(){
            $this->SetY(-10);
            $this->SetFont('Arial','I',8);
            $this->Cell(0,10,'Pagina '.$this->PageNo(),0,0,'C');
        }
    }

    //creamos el objeto de la clase deseada
    $pdf = new PDF();
    $pdf ->AddPage();
    $pdf->Cell(140,50,"You you yiovani, impredecible");
    $pdf ->Write(45,"Para ir a la siguiente pagina pulse ");
    $link = $pdf->AddLink();
    $pdf->Write(45,"AQUI",$link);
    //Segunda página
    $pdf->AddPage();
    $pdf->SetLink($link);

    $pdf->Output("cositas.pdf","I");