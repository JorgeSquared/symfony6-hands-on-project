<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController
{
    private array $greetingsList = [
            'Hello',
            'Jorge',
            'How are you'
        ];

    #[Route('/')]
    public function index(): Response
    {
        return new Response('HI!');
    }

    #[Route('/show/{id}')]
    public function show($id): Response
    {
        return new Response($this->greetingsList[$id]);
    }
}
