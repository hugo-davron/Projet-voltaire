<?php // content="text/plain; charset=utf-8"
require_once ('/home/ann2/cadarsir/public_html/pag/jpgraph/jpgraph.php');
require_once ('/home/ann2/cadarsir/public_html/pag/jpgraph/jpgraph_pie.php');
$result = unserialize($_GET['serializedtpsniv']);
$legend = unserialize($_GET['serializedlgniv']);

// Create the Pie Graph. 
$graph = new PieGraph(600,600);

$theme_class="DefaultTheme";
//$graph->SetTheme(new $theme_class());

// Set A title for the plot
$graph->title->Set("Temps d'utilisation par niveau");
$graph->SetBox(true);

// Create
$p1 = new PiePlot($result);
$p1->SetLegends($legend);
$p1->SetCenter(0.4);
$graph->Add($p1);

$p1->ShowBorder();
$p1->SetColor('black');
if(count($result) == 1){
$p1->SetSliceColors(array('#1E90FF'));
}
elseif(count($result) == 2){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57'));
}
elseif(count($result) == 3){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F'));
}
elseif(count($result) == 4){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C'));
}
elseif(count($result) == 5){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3'));
}
elseif(count($result) == 6){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a'));
}
elseif(count($result) == 7){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c'));
}
elseif(count($result) == 8){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75'));
}
elseif(count($result) == 9){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789'));
}
elseif(count($result) == 10){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d'));
}
elseif(count($result) == 11){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688'));
}
elseif(count($result) == 12){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c'));
}
elseif(count($result) == 13){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8'));
}
elseif(count($result) == 14){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e'));
}
elseif(count($result) == 15){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8'));
}
elseif(count($result) == 16){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f'));
}
elseif(count($result) == 17){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78'));
}
elseif(count($result) == 18){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653'));
}
elseif(count($result) == 19){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653','#350936'));
}
elseif(count($result) == 20){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653','#350936','#6795a3'));
}
elseif(count($result) == 21){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653','#350936','#6795a3','#448773'));
}
elseif(count($result) == 23){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653','#350936','#6795a3','#448773','#594ce6','#6b0039'));	
}
elseif(count($result) == 24){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653','#350936','#6795a3','#448773','#594ce6','#6b0039','#eb268f'));	
}
elseif(count($result) == 25){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653','#350936','#6795a3','#448773','#594ce6','#6b0039','#eb268f','#6d8a6f'));
}
elseif(count($result) == 26){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653','#350936','#6795a3','#448773','#594ce6','#6b0039','#eb268f','#6d8a6f','#7aa60a'));
}
elseif(count($result) == 27){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653','#350936','#6795a3','#448773','#594ce6','#6b0039','#eb268f','#6d8a6f','#7aa60a','#bf88a8'));
}
elseif(count($result) == 28){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653','#350936','#6795a3','#448773','#594ce6','#6b0039','#eb268f','#6d8a6f','#7aa60a','#bf88a8','#525e26'));
}
elseif(count($result) == 29){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653','#350936','#6795a3','#448773','#594ce6','#6b0039','#eb268f','#6d8a6f','#7aa60a','#bf88a8','#525e26','#77b8d1'));
}
elseif(count($result) == 30){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653','#350936','#6795a3','#448773','#594ce6','#6b0039','#eb268f','#6d8a6f','#7aa60a','#bf88a8','#525e26','#77b8d1','#147296'));
}
elseif(count($result) == 31){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653','#350936','#6795a3','#448773','#594ce6','#6b0039','#eb268f','#6d8a6f','#7aa60a','#bf88a8','#525e26','#77b8d1','#147296','#99ed1a'));
}
elseif(count($result) == 32){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653','#350936','#6795a3','#448773','#594ce6','#6b0039','#eb268f','#6d8a6f','#7aa60a','#bf88a8','#525e26','#77b8d1','#147296','#99ed1a','#ff007b'));
}
elseif(count($result) == 33){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653','#350936','#6795a3','#448773','#594ce6','#6b0039','#eb268f','#6d8a6f','#7aa60a','#bf88a8','#525e26','#77b8d1','#147296','#99ed1a','#ff007b','#ff8fc5'));
}
elseif(count($result) == 34){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653','#350936','#6795a3','#448773','#594ce6','#6b0039','#eb268f','#6d8a6f','#7aa60a','#bf88a8','#525e26','#77b8d1','#147296','#99ed1a','#ff007b','#ff8fc5','#10eba6'));
}

elseif(count($result) == 35){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653','#350936','#6795a3','#448773','#594ce6','#6b0039','#eb268f','#6d8a6f','#7aa60a','#bf88a8','#525e26','#77b8d1','#147296','#99ed1a','#ff007b','#ff8fc5','#10eba6','#6b3130'));
}

elseif(count($result) == 36){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653','#350936','#6795a3','#448773','#594ce6','#6b0039','#eb268f','#6d8a6f','#7aa60a','#bf88a8','#525e26','#77b8d1','#147296','#99ed1a','#ff007b','#ff8fc5','#10eba6','#6b3130','#ff3936'));
}

elseif(count($result) == 37){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653','#350936','#6795a3','#448773','#594ce6','#6b0039','#eb268f','#6d8a6f','#7aa60a','#bf88a8','#525e26','#77b8d1','#147296','#99ed1a','#ff007b','#ff8fc5','#10eba6','#6b3130','#ff3936','#260100'));
}

elseif(count($result) == 38){
	$p1->SetSliceColors(array('#1E90FF','#2E8B57','#ADFF2F','#DC143C','#BA55D3','#1a572a','#b2bd6c','#7a2d75','#cf5789','#7d7d7d','#cfa688','#542a0c','#78f5d8','#2a425e','#9dfad8','#00633f','#644d78','#c26653','#350936','#6795a3','#448773','#594ce6','#6b0039','#eb268f','#6d8a6f','#7aa60a','#bf88a8','#525e26','#77b8d1','#147296','#99ed1a','#ff007b','#ff8fc5','#10eba6','#6b3130','#ff3936','#260100','#916564'));
}


$graph->Stroke();

?>
