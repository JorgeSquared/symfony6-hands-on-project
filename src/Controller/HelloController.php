<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    private array $messages = [
            'Hello',
            'Jorge',
            'How are you?'
        ];

    #[Route('/{limit<\d+>?3}', name: 'app_index')]
    public function index(int $limit): Response
    {
        return $this->render(
            'hello/index.html.twig',
                [
                    'messageList' => $this->messages,
                     'limit' => $limit,
                ]
        );
    }

    #[Route('/show/{id<\d+>}', name: 'app_show_one')]
    public function showOne ($id): Response
    {
        return $this->render(
            'hello/show_one.html.twig',
            [
                'message' => $this->messages[$id],
            ],
        );
    }
}
