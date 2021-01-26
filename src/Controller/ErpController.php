<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ErpController extends AbstractController
{
    /**
     * @Route("/", name="erp")
     */
    public function index()
    {
        return $this->render('erp/home.html.twig', [
            'title_name' => 'Solution et logiciel de gestion d’entreprise en Tunisie - Adept'
        ]);
    }
}
