<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Flex\Response;

class FormulaireArticleController extends AbstractController
{

    /**
     * @var ArticleRepository
     */
    private $repository;

    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }


    /**
     * @Route("/formulaire/article", name="formulaire_article")
     *
     */
    public function index(): \Symfony\Component\HttpFoundation\Response
    {
        $property = $this->repository->findAll();
        dump($property);
        return $this->render('formulaire_article/index.html.twig', [
            'controller_name' => 'FormulaireArticleController',
        ]);

        // Creating data
        /*  $article = new Article();
        $article->setTitre('Mon premier article')
                ->setResume('je suis une chaise bleue ')
                ->setContenu('je suis une chaise bleue qui à 4 pied et que ')
                ->setDate(new \DateTime());
        //Afficher les datas
        $em = $this->getDoctrine()->getManager();
        $em->persist($article);
        $em->flush();*/

//        $form = $this->createFormBuilder($article)
//            ->add('Titre', Type::class)
//            ->add('Resume', DateType::class)
//            ->add('Contenu', Type::class)
//            ->add('Date', DateType::class)
//            ->add('save', SubmitType::class, ['label' => 'Create Task'])
//            ->getForm();


    }
}
