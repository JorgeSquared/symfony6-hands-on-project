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

    #[Route('/{limit<\d+>?3}', name: 'app_index')]
    public function index(int $limit): Response
    {
        return new Response(implode(', ', array_slice($this->greetingsList, 0, $limit)));
    }

    #[Route('/show/{id<\d+>}', name: 'app_show_one')]
    public function showOne ($id): Response
    {
        return new Response($this->greetingsList[$id]);
    }
}
