<?php // content="text/plain; charset=utf-8"
require_once ('/home/ann2/cadarsir/public_html/pag/jpgraph/jpgraph.php');
require_once ('/home/ann2/cadarsir/public_html/pag/jpgraph/jpgraph_line.php');
$result = unserialize($_GET['serializedresult']);

// Setup the graph
$graph = new Graph(350,350);
$graph->SetScale("textlin");

$theme_class=new UniversalTheme;

$graph->SetTheme($theme_class);
$graph->img->SetAntiAliasing(false);
$graph->title->Set('Temps passé sur le projet voltaire en Minutes');
$graph->SetBox(false);

$graph->SetMargin(40,20,36,63);

$graph->img->SetAntiAliasing();

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

$graph->xgrid->Show();
$graph->xgrid->SetLineStyle("solid");

$graph->xgrid->SetColor('#E3E3E3');

// Create the first line
$p1 = new LinePlot($result);
$graph->Add($p1);
$p1->SetColor("#6495ED");
$p1->SetLegend('Temps Total');

$graph->legend->SetFrameWeight(1);

// Output line
$graph->Stroke();

?>
