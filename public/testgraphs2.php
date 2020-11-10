<?php // content="text/plain; charset=utf-8"
require_once ('/home/ann2/cadarsir/public_html/pag/jpgraph/jpgraph.php');
require_once ('/home/ann2/cadarsir/public_html/pag/jpgraph/jpgraph_line.php');
$m1 = unserialize($_GET['sm1']);
$m2 = unserialize($_GET['sm2']);
$m3 = unserialize($_GET['sm3']);
$m4 = unserialize($_GET['sm4']);
$m5 = unserialize($_GET['sm5']);
$m6 = unserialize($_GET['sm6']);


// Setup the graph
$graph = new Graph(350,350);
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;

$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(false);
$graph->title->Set('Niveau atteint par module en %');
$graph->SetBox(false);

$graph->SetMargin(40,20,36,63);

$graph->img->SetAntiAliasing();

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");
$graph->xaxis->SetTickLabels(array('A','B','C','D'));
$graph->xgrid->SetColor('#E3E3E3');

// Create the first line
$p1 = new LinePlot($m1);
$graph->Add($p1);
$p1->SetColor("#4b88eb");
$p1->SetLegend('Tous Modules');

if(!empty($m2)){
$p1 = new LinePlot($m2);
$graph->Add($p1);
$p1->SetColor("#22c973");
$p1->SetLegend('Supérieur');
}
if(!empty($m3)){
$p1 = new LinePlot($m3);
$graph->Add($p1);
$p1->SetColor("#b02dc2");
$p1->SetLegend('Orthotypographie');
}
if(!empty($m4)){
$p1 = new LinePlot($m4);
$graph->Add($p1);
$p1->SetColor("#f72a4c");
$p1->SetLegend('Excellence');
}
if(!empty($m5)){
$p1 = new LinePlot($m5);
$graph->Add($p1);
$p1->SetColor("#edda2b");
$p1->SetLegend('Pro');
}
if(!empty($m6)){
$p1 = new LinePlot($m6);
$graph->Add($p1);
$p1->SetColor("#754d1e");
$p1->SetLegend('Pont Supérieur');
}
$graph->legend->SetFrameWeight(1);

// Output line
$graph->Stroke();

?>
