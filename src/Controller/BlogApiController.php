<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogApiController extends AbstractController
{
    #[Route('api/posts/{id}', methods: ['GET', 'HEAD'])]
    public function show(int $id): Response
    {
        return $this->render('blog_api/index.html.twig', [
            'method' => 'show',
        ]);
    }

    #[Route('/api/posts/{id}', methods: ['PUTS'])]
    public function edit(int $id): Response
    {
        return $this->render('blog_api/index.html.twig', [
            'method' => 'edit',
        ]);
    }
}
