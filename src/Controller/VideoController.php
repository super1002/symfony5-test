<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VideoController extends AbstractController
{
    /**
     * @Route("/video", name="video")
     */
    public function index()
    {
        return $this->render('video/index.html.twig', [
            'controller_name' => 'VideoController',
        ]);
    }

    /**
     * @Route("/add_video", name="add_video")
     */
    public function addVideo()
    {
        return $this->render('video/add_video.html.twig', [
            'controller_name' => 'VideoController',
        ]);
    }


}
