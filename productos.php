<?php
require('fpdf/fpdf.php');
require('conexao.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(18, 10, '', 0);
$pdf->Cell(150, 10, 'Pedidos', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'Data: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'LISTA DE PEDIDOS', 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(15, 8, 'ID', 0);
$pdf->Cell(20, 8, 'Nome', 0);
$pdf->Cell(20, 8, 'Data Entrada', 0);
$pdf->Cell(25, 8, 'Requisitante', 0);
$pdf->Cell(25, 8, 'Data Autorizacao', 0);
$pdf->Cell(25, 8, 'Data Resposta', 0);
$pdf->Cell(25, 8, 'Tipo', 0);
$pdf->Cell(25, 8, 'Observacoes', 0);
$pdf->Cell(25, 8, 'Estado', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
$productos = mysql_query("SELECT * FROM pedido,requisitante,tipo,estado WHERE requisitante=req_id AND pedido.ped_tipo=tipo.tipo_id=estado.estado_id ORDER BY ped_id");
$item = 0;
$totaluni = 0;
$totaldis = 0;
while($productos2 = mysql_fetch_array($productos)){;
	$pdf->Cell(15, 8,$productos2['ped_id'], 0);
	$pdf->Cell(20, 8,$productos2['ped_nome'], 0);
	$pdf->Cell(20, 8,$productos2['data_entrada'], 0);
	$pdf->Cell(25, 8,$productos2['req_nome'], 0);
	$pdf->Cell(25, 8,$productos2['data_autori'], 0);
	$pdf->Cell(25, 8,$productos2['data_resp'], 0);
	$pdf->Cell(25, 8,$productos2['tipo_descricao'], 0);
	$pdf->Cell(25, 8,$productos2['observacoes'], 0);
	$pdf->Cell(25, 8,$productos2['estado_descricao'], 0);
	$pdf->Ln(8);
}
$pdf->Output();
?>