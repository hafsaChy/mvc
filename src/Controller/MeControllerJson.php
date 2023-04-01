<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class MeControllerJson
{
    #[Route("/api/quote")]
    public function jsonNumber(): Response
    {
        $quotelucky = ["Whatever you are, be a good one.",
        "Be yourself; everyone else is already taken.",
        "Act as if what you do makes a difference.",
        "The only real mistake is the one from which we learn nothing.",
        "Positive anything is better than negative nothing.",
        "Limit your 'always' and your 'nevers'."][random_int(0, 5)];

        $data = [
            'today' => date("Y/m/d"),
            'quote' => $quotelucky
        ];

        $response = new JsonResponse($data);
        $response->setEncodingOptions(
            $response->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $response;

    }
}