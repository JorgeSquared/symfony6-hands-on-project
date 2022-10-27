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
            'How are you?'
        ];

    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        return new Response(implode(', ', $this->greetingsList));
    }

    #[Route('/show/{id}', name: 'app_show_one')]
    public function showOne ($id): Response
    {
        return new Response($this->greetingsList[$id]);
    }
}
