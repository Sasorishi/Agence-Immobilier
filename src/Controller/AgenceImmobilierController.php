<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Bien;

class AgenceImmobilierController extends AbstractController
{
    /**
     * @Route("/agence/immobilier", name="agence_immobilier")
     */
    public function index()
    {
        return $this->render('agence_immobilier/index.html.twig', [
            'controller_name' => 'AgenceImmobilierController',
        ]);
    }

    /**
     * @Route("/", name="accueil")
     */
    public function accueil()
    {
        return $this->render('agence_immobilier/accueil.html.twig', [
            'controller_name' => 'AgenceImmobilierController',
        ]);
    }

    /**
     * @Route("/acheter", name="acheter")
     */
    public function acheter()
    {
        return $this->render('agence_immobilier/acheter.html.twig', [
            'controller_name' => 'AgenceImmobilierController',
        ]);
    }

    /**
     * @Route("/louer", name="louer")
     */
    public function louer()
    {
        $repository = $this->getDoctrine()->getRepository(Bien::class);
        $biens = $repository->findAll();

        return $this->render('agence_immobilier/louer.html.twig', [
            'controller_name' => 'AgenceImmobilierController',
            'biens' => $biens
        ]);
    }

    /**
     * @Route("/emprunter", name="emprunter")
     */
    public function emprunter()
    {
        return $this->render('agence_immobilier/emprunter.html.twig', [
            'controller_name' => 'AgenceImmobilierController',
        ]);
    }

    /**
     * @Route("/construire", name="construire")
     */
    public function construire()
    {
        return $this->render('agence_immobilier/construire.html.twig', [
            'controller_name' => 'AgenceImmobilierController',
        ]);
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('agence_immobilier/contact.html.twig', [
            'controller_name' => 'AgenceImmobilierController',
        ]);
    }

    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion()
    {
        return $this->render('agence_immobilier/connexion.html.twig', [
            'controller_name' => 'AgenceImmobilierController',
        ]);
    }

    /**
     * @Route("/inscription", name="inscription")
     */
    public function inscription()
    {
        return $this->render('agence_immobilier/inscription.html.twig', [
            'controller_name' => 'AgenceImmobilierController',
        ]);
    }
}
