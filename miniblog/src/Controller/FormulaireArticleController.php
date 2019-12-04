<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FormulaireArticleController extends AbstractController
{
    /**
     * @Route("/formulaire/article", name="formulaire_article")
     */
    public function index()
    {
        return $this->render('formulaire_article/index.html.twig', [
            'controller_name' => 'FormulaireArticleController',
        ]);
    }
}
