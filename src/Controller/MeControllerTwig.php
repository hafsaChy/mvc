<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MeControllerTwig extends AbstractController
{
    #[Route("/", name: "home")]
    public function home(): Response
    {
        return $this->render('home.html.twig');
    }

    #[Route("/about", name: "about")]
    public function about(): Response
    {
        return $this->render('about.html.twig');
    }

    #[Route("/report", name: "report")]
    public function report(): Response
    {
        return $this->render('report.html.twig');
    }

    #[Route("/lucky", name: "lucky")]
    public function lucky(): Response
    {
        $number = random_int(0, 2);
        $bird = ["magpie", "parrot", "flamingo"][$number];
        $img_bird = ["magpie.jpg", "parrot.webp", "flamingo.jpeg"][$number];

        $data = [
            'bird' => $bird,
            'img_bird' => $img_bird
        ];

        return $this->render('lucky.html.twig', $data);
    }


}