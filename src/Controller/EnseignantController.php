<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\VoltaireCritere;
use App\Entity\VoltaireBareme;
use App\Entity\VoltaireEnseignant;
use App\Entity\VoltaireEtudiant;
use App\Entity\VoltaireMessage;


class EnseignantController extends AbstractController
{
    /**
     * @Route("/mail", name="Boite mail du professeur")
     */
    public function mail()
    {
    	$user = $this->getUser();
    	$entityManager = $this->getDoctrine()->getManager();
    	$messageRepo = $this->getDoctrine()->getRepository(VoltaireMessage::class)->findBy(['loginEnseignant' => $user->get('login')]);
    	$etudiantsRepo = $this->getDoctrine()->getRepository(VoltaireMessage::class)->findAll();

    	return $this->render('enseignant/message.html.twig', [
    		'messages' => $messageRepo,
    		'etudiants' => $etudiantsRepo,
    		'user' => $user,
    	]);
    }
}
