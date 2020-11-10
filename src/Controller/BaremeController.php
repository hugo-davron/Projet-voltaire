<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\VoltaireCritere;
use App\Entity\VoltaireBareme;

class BaremeController extends AbstractController
{
    /**
     * @Route("/bareme", name="bareme")
     */
    public function index()
    {
    	return $this->render('bareme/index.html.twig', [
    		'controller_name' => 'BaremeController',
    	]);
    }

    /**
     * @Route("/bareme/creerbareme", name="creer bareme")
     */
    public function creerbareme()
    {
    	return $this->render('etudiant/bareme.html.twig', [
                
        ]);
    }

    /**
     * @Route("/bareme/verifybareme", name="verifier bareme")
     */
    public function verifybareme()
    {
        $message2 = "";
        $message3 = "";
    	$paramfin1 = $_GET['1param52'];
    	$paramfin2 = $_GET['2param52'];
    	$paramfin3 = $_GET['3param52'];

    	if((strcmp($_GET['1param52'],"") == 0) || (strcmp($_GET['2param52'],"") == 0) || (strcmp($_GET['3param52'],"") == 0)){
    		if(($_GET['1param11'] < $_GET['1param12']) || ($_GET['1param12'] <= $_GET['1param21']) || ($_GET['1param21'] < $_GET['1param22']) || ($_GET['1param22'] <= $_GET['1param31']) || ($_GET['1param31'] < $_GET['1param32']) ||($_GET['1param32'] <= $_GET['1param41']) || ($_GET['1param41'] < $_GET['1param42']) || ($_GET['1param42'] <= $_GET['1param51']) ||
    		($_GET['2param11'] < $_GET['2param12']) || ($_GET['2param12'] <= $_GET['2param21']) || ($_GET['2param21'] < $_GET['2param22']) || ($_GET['2param22'] <= $_GET['2param31']) || ($_GET['2param31'] < $_GET['2param32']) ||($_GET['2param32'] <= $_GET['2param41']) || ($_GET['2param41'] < $_GET['2param42']) || ($_GET['2param42'] <= $_GET['2param51']) ||
    		($_GET['3param11'] < $_GET['3param12']) || ($_GET['3param12'] <= $_GET['3param21']) || ($_GET['3param21'] < $_GET['3param22']) || ($_GET['3param22'] <= $_GET['3param31']) || ($_GET['3param31'] < $_GET['3param32']) ||($_GET['3param32'] <= $_GET['3param41']) || ($_GET['3param41'] < $_GET['3param42']) || ($_GET['3param42'] <= $_GET['3param51'])){
                if(strcmp($_GET['1param12'],$_GET['1param21']) != 0 || strcmp($_GET['1param22'],$_GET['1param31']) != 0 || strcmp($_GET['1param32'],$_GET['1param41']) != 0 || strcmp($_GET['1param42'],$_GET['1param51']) != 0  || strcmp($_GET['2param12'],$_GET['2param21']) != 0 || strcmp($_GET['2param22'],$_GET['2param31']) != 0 || strcmp($_GET['2param32'],$_GET['2param41']) != 0 || strcmp($_GET['2param42'],$_GET['2param51']) != 0 || strcmp($_GET['3param12'],$_GET['3param21']) != 0 || strcmp($_GET['3param22'],$_GET['3param31']) != 0 || strcmp($_GET['3param32'],$_GET['3param41']) != 0 || strcmp($_GET['3param42'],$_GET['3param51']) != 0){
                $message = "Il semble que vous n'ayez pas donné des intervalles fermées (On ne peux pas attribuer 1 point pour 2-4 points et 2 points pour 5-7 points!) <a href= 'http://webinfo.iutmontp.univ-montp2.fr/~cadarsir/pag/public/index.php/bareme/creerbareme'> Recreer un bareme ! </a>";
                }else{
                $message = "Bareme verifié !";
                $messages = BaremeController::verifiedbareme();
                $message2 = $messages[0];
            $message3 = $messages[1];
            }
    		}
            else{
                $message = "Il semble qu'il y ait une incohérence pour les intervalles (le deuxieme intervale doit toujours être supérieur au premier). <a href= 'http://webinfo.iutmontp.univ-montp2.fr/~cadarsir/pag/public/index.php/bareme/creerbareme'> Recreer un bareme ! </a>";
            }
    	}
    	elseif((strcmp($_GET['1param12'],"") == 0) || (strcmp($_GET['1param22'],"") == 0) || (strcmp($_GET['1param32'],"") == 0) || (strcmp($_GET['1param42'],"") == 0)  ||
    		(strcmp($_GET['2param12'],"") == 0) || (strcmp($_GET['2param22'],"") == 0) || (strcmp($_GET['2param32'],"") == 0) || (strcmp($_GET['2param42'],"") == 0)  ||
    		(strcmp($_GET['3param12'],"") == 0) || (strcmp($_GET['3param22'],"") == 0)|| (strcmp($_GET['3param32'],"") == 0) || (strcmp($_GET['3param42'],"") == 0)) {
    		$message = "L'une des intervalles de début est nulle ! (Vous pouvez laisser uniquement que la derniere intervalle d'un critère vide ) <a href= 'http://webinfo.iutmontp.univ-montp2.fr/~cadarsir/pag/public/index.php/bareme/creerbareme'> Recreer un bareme ! </a>";}	
    	elseif( !($_GET['1param11'] < $_GET['1param12']) || !($_GET['1param12'] <= $_GET['1param21']) || !($_GET['1param21'] < $_GET['1param22']) || !($_GET['1param22'] <= $_GET['1param31']) || !($_GET['1param31'] < $_GET['1param32']) ||!($_GET['1param32'] <= $_GET['1param41']) || !($_GET['1param41'] < $_GET['1param42']) || !($_GET['1param42'] <= $_GET['1param51']) || !($_GET['1param51'] < $_GET['1param52']) || 
    		!($_GET['2param11'] < $_GET['2param12']) || !($_GET['2param12'] <= $_GET['2param21']) || !($_GET['2param21'] < $_GET['2param22']) || !($_GET['2param22'] <= $_GET['2param31']) || !($_GET['2param31'] < $_GET['2param32']) ||!($_GET['2param32'] <= $_GET['2param41']) || !($_GET['2param41'] < $_GET['2param42']) || !($_GET['2param42'] <= $_GET['2param51']) || !($_GET['2param51'] < $_GET['2param52']) || 
    		!($_GET['3param11'] < $_GET['3param12']) || !($_GET['3param12'] <= $_GET['3param21']) || !($_GET['3param21'] < $_GET['3param22']) || !($_GET['3param22'] <= $_GET['3param31']) || !($_GET['3param31'] < $_GET['3param32']) ||!($_GET['3param32'] <= $_GET['3param41']) || !($_GET['3param41'] < $_GET['3param42']) || !($_GET['3param42'] <= $_GET['3param51']) || !($_GET['3param51'] < $_GET['1param52'])){

    		$message = "Il y a un problème avec l'attribution des critères, avez vous bien vérifié que tous les criteres sont dans l'ordre croissant?  <a href= 'http://webinfo.iutmontp.univ-montp2.fr/~cadarsir/pag/public/index.php/bareme/creerbareme'> Recreer un bareme ! </a>";
    	}	
    	else{
    		$message = "Bareme verifié !";
    		$messages = BaremeController::verifiedbareme();
            $message2 = $messages[0];
            $message3 = $messages[1];
    	}

    	return $this->render('etudiant/creerbareme.html.twig', [
                'message' => $message,
                'message2' => $message2,
                'message3' => $message3
        ]);
    }


    public function verifiedBareme(){
    	$paramfin1 = $_GET['1param52'];
    	$paramfin2 = $_GET['2param52'];
    	$paramfin3 = $_GET['3param52'];
        $message3 = "";
    	$message = "Etes vous sur de vouloir creer le barême ";
    	if(isset($_GET['favori'])){$message = $message . "(mis en favori)";
    		}
    		$message = $message . " avec : <br> <ul>"; 
    		$message = $message . "<li> Pour la progression : <ul>" ;
    		$message = $message . "<li> 1pt attribué pour une progression de " . $_GET['1param11'] . "% à " . $_GET['1param12'] . "%.";
    		$message = $message . "<li> 2pts attribués pour une progression de " . $_GET['1param21'] . "% à " . $_GET['1param22'] . "%.";
    		$message = $message . "<li> 3pts attribués pour une progression de " . $_GET['1param31'] . "% à " . $_GET['1param32'] . "%.";
    		$message = $message . "<li> 4pts attribués pour une progression de " . $_GET['1param41'] . "% à " . $_GET['1param42'] . "%.";
    		if(strcmp($paramfin1,"") == 0){
    			$message = $message . "<li> 5pts attribué pour une progression supérieure à  " . $_GET['1param51'] . "%. </ul>";
    		}
    		else { $message = $message . "<li> 5pts attribué pour une progression de " . $_GET['1param51'] . "% à " . $_GET['1param52'] . "%. </ul>";} 
    		$message = $message . "<li> Pour le temps d'entrainement : <ul> ";
    		$message = $message . "<li> 1pt attribué pour un temps total de " . $_GET['2param11'] . "minutes à " . $_GET['2param12'] . "minutes.";
    		$message = $message . "<li> 2pts attribués pour un temps total de " . $_GET['2param21'] . "minutes à " . $_GET['2param22'] . "minutes.";
    		$message = $message . "<li> 3pts attribués pour un temps total de " . $_GET['2param31'] . "minutes à " . $_GET['2param32'] . "minutes.";
    		$message = $message . "<li> 4pts attribués pour un temps total de " . $_GET['2param41'] . "minutes à " . $_GET['2param42'] . "minutes.";
    		if(strcmp($paramfin2,"") == 0){
    			$message = $message . "<li> 5pts attribués pour un temps total de plus de " . $_GET['2param51'] . "minutes. </ul>";
    		}
    		else{
    			$message = $message . "<li> 5pts attribués pour un temps total de " . $_GET['2param51'] . "minutes à " . $_GET['2param52'] . "minutes. </ul>";
    		}
    		$message = $message . "<li> Pour les nombres de niveau acquis : <ul>" ;
    		$message = $message . "<li> 1pt attribué pour un nombre de niveau acquis entre " . $_GET['3param11'] . " et " . $_GET['3param12'] . ".";
    		$message = $message . "<li> 2pts attribué pour un nombre de niveau acquis entre " . $_GET['3param21'] . " et " . $_GET['3param22'] . ".";
    		$message = $message . "<li> 3pts attribué pour un nombre de niveau acquis entre " . $_GET['3param31'] . " et " . $_GET['3param32'] . ".";
    		$message = $message . "<li> 4pts attribué pour un nombre de niveau acquis entre " . $_GET['3param41'] . " et " . $_GET['3param42'] . ".";
    		if(strcmp($paramfin3,"") == 0){
    			$message = $message . "<li> 5pts attribué pour un nombre de niveau acquis supérieur à " . $_GET['3param51'] . " . </ul> ";
    		}
    		else{
    			$message = $message . "<li> 5pts attribué pour un nombre de niveau acquis entre " . $_GET['3param51'] . " et " . $_GET['3param52'] . ". </ul>";
    		}

    		$message = $message . "</ul>";

    		if(array_key_exists('Valider', $_POST)) { 
            $message3 = BaremeController::validerBareme(); 
        	} 

        	$message = $message . "<form method=\"post\"> 
        <input type=\"submit\" name=\"Valider\"
                class=\"button\" value=\"Valider\" /> 
    </form> ";
    return array($message,$message3);


    }
    public function reformulerCriteres(){
    	$criteres = array();
    	$critere1 = strval($_GET['1param11']) .",". strval($_GET['1param12']).";" .  strval($_GET['1param21']) . ",".  strval($_GET['1param22']) . ";" .  strval($_GET['1param31']) .",".  strval($_GET['1param32']) .";".  strval($_GET['1param41']) . "," .  strval($_GET['1param42']) .";".  strval($_GET['1param51']) .",". strval($_GET['1param52']);
    	$critere2 = strval($_GET['2param11']) .",". strval($_GET['2param12']).";" .  strval($_GET['2param21']) . ",".  strval($_GET['2param22']) . ";" .  strval($_GET['2param31']) .",".  strval($_GET['2param32']) .";".  strval($_GET['2param41']) . "," .  strval($_GET['2param42']) .";".  strval($_GET['2param51']) .",". strval($_GET['2param52']);
    	$critere3 = strval($_GET['3param11']) .",". strval($_GET['3param12']).";" .  strval($_GET['3param21']) . ",".  strval($_GET['3param22']) . ";" .  strval($_GET['3param31']) .",".  strval($_GET['3param32']) .";".  strval($_GET['3param41']) . "," .  strval($_GET['3param42']) .";".  strval($_GET['3param51']) .",". strval($_GET['3param52']);
    	array_push($criteres, $critere1);
    	array_push($criteres, $critere2);
    	array_push($criteres, $critere3);
    	return $criteres;
    }
    
    public function validerBareme(){ 
    	if(isset($_GET['favori'])){$favori = 1;}
    	else{$favori=0;}
    		$entityManager = $this->getDoctrine()->getManager();
    		$repository = $this->getDoctrine()->getRepository(VoltaireCritere::class);
            $criteres = BaremeController::reformulerCriteres();
            $critere = new VoltaireCritere();
            $critere->setProgression($criteres[0]);
            $critere->setTpsUtilisation($criteres[1]);
            $critere->setNiveauAtteint($criteres[2]);
            $critere->setEvaluationFinale(20);
            $entityManager->persist($critere);
            try {
              $entityManager->flush();  
            }
            catch(Exception $e){
                return "Ce bareme a deja ete cree !";
            }
            $product = $repository->findOneBy([
            	'progression' => $criteres[0],
            	'tpsUtilisation' => $criteres[1],
            	'niveauAtteint' => $criteres[2],
            ]);
            $bareme = new VoltaireBareme();
            $bareme->setNomBareme($_GET['nom']);
            $bareme->setFavoriBareme($favori);
            $bareme->setIdCritere( $product->getIdCritere());
            $entityManager->persist($bareme);
            try { 
                $entityManager->flush();
                return "Bareme validé ! <a href= \"http://webinfo.iutmontp.univ-montp2.fr/~cadarsir/pag/public/index.php/etudiant\" > Retourner sur la page d'accueil </a>";
            }
            catch(Exception $e){
                return "Ce bareme a deja ete cree !";
            }
            
            

        }

    public function nextIdCritere(){
    	return $repository->createQueryBuilder('u')
            ->select('count(u.id)')
            ->getQuery()
            ->getSingleScalarResult();
    } 

}
