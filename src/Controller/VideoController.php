<?php

namespace App\Controller;

use App\Entity\Video;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class VideoController extends AbstractController
{
    /**
     * @Route("/show_videos", name="show_videos")
     */
    public function showVideos()
    {
        $videos = $this->getDoctrine()->getRepository(Video::class)->findAll();
        return $this->render('video/show_videos.html.twig', ['videos' => $videos]);
    }

    /**
     * @Route("/show_video/{youtubeId}", name="show_video")
     */
    public function showVideo($youtubeId)
    {
        $video = $this->getDoctrine()->getRepository(Video::class)->findOneBy(['youtube_id' => $youtubeId]);
        return $this->render('video/show_video.html.twig', ['video' => $video]);
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

    /**
     * @Route("/show_cat_videos/{categoryId}", name="show_cat_videos")
     */
    public function showByCategory($categoryId)
    {
        // $videos = $this->getDoctrine()->getRepository(Video::class)->findBy(['category_id' => $categoryId]);
//        $videos =

        return $this->render('video/show_videos.html.twig', ['videos' => $videos]);
    }

}
