{% extends 'base.html.twig' %}
{% block title %} Creation bareme {% endblock %}
{% block body %}
<?php 
	
$param1 = $_GET['1param'];
$param2 = $_GET['2param'];
$param3 = $_GET['3param'];
$param4 = $_GET['4param'];

if(($param1 + $param2 + $param3 + $param4) == 20 ){
	echo("Ok ben c'est bon, creation du bareme...");
}
else{
	echo("oulala, ca ne fais pas 20, <a href=\"http://webinfo.iutmontp.univ-montp2.fr/~cadarsir/VoltaireQ2Project/templates/etudiant/bareme.php\"> Retournez sur la page! </a>");
}
?>
{% endblock %}

