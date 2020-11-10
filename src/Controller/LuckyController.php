<?php
// src/Controller/LuckyController.php
namespace App\Controller;


//Les importations de Sympfony
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class LuckyController extends AbstractController
{
	//La route correspond a l'adresse url a entrer pour y acceder
/**
* @Route("/lucky/number")
*/
public function number()

//Cette fonction lit le fichier csv Complexe de base et le découpe en objet ligne corespondant aux informations des etudiants, qui sont ensuite sauvegardées dans un fichier csv (Pas vraiment fonctionnel) et sauvegardés dans la bdd.

{
	$rowNo = 1;
	$boolean = 0;
	$nomcolonnes = array();
	$info = array();
	//zone de declaration des colonnes de l'objet
	$sphère = "";
	$groupe = "";
	$nom = "";
	$prenom = "";
	$identifiant = "";
	$inscription = "";
	$module = "";
	$dernutilisation = "";
	$tempstotal = "";
	$usagefixe = "";
	$usagemobile = "";
	$scoreevalinit = "";
	$tmpsevaluationinit = "";
	$niveauinit = "";
	$tmpentrainement = "";
	$niveauatteint = "";
	$dateCV = "";

        // $fp is file pointer to file sample.csv
	if (($fp = fopen((__DIR__)."\\data.csv", "r")) !== FALSE) {
		while (($row = fgetcsv($fp, 1000, ";")) !== FALSE) {
            //Only 0 .  $num = count($row);
            //useless because CSV have one column and c is always only 0.  for($c=0 ; $c< $num; $c++){
			$str = explode(";", $row[0]);
			//explode va faire de str un array qui est row découpée: exemple 1;2;3;4;5 l'array "1","2", etc...
			if($boolean == 0){
				foreach ($str as $s) {// La premiere ligne contient les noms de colonnes
					array_push($nomcolonnes,$s);
					$boolean++;
					
				}
				$nbColonnes = count($str);
			}
			else{
				foreach ($str as $s ) {
					echo($s);
					echo(" , ");
				}
				array_push($info, $str);
			}
			
			$rowNo++;
			echo("<br>");
		}
		fclose($fp);
	}
	$file = fopen((__DIR__)."\\result.csv", "w");
	foreach ($info as $ligne) {
		fputcsv($file, $ligne);
	}
	fclose($file);

	return new Response();
	

}
}?>