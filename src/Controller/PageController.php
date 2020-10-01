<?php

namespace App\Controller;

use App\Entity\Page;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    /**
     * @Route("/", name="home_page")
     */
    public function index()
    {
        /*
        $page = new Page();
        $page->setKeywords('Любимые видео')
            ->setTitle('Любимые видео')
            ->setContent('Добавление нового видео и удобная разметка')
            ->setDescription('Любимые видео');
        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($page);
        $entityManager->flush();
        */

        $homePage = $this->getDoctrine()->getRepository(Page::class)->find(1);

        return $this->render('page/index.html.twig', [
            // 'controller_name' => 'PageController',
            'homePage' => $homePage,
        ]);
    }
}
