<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloController extends AbstractController
{
    private array $messages = [
            ['message' => 'Hello', 'created' => '2022/06/12'],
            ['message' => 'Hi', 'created' => '2022/04/12'],
            ['message' => 'Bye!', 'created' => '2021/05/12'],
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
