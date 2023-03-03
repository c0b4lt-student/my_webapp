<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/get_name', name: 'app_user')]
    public function index(): Response
    {
        $name = 'CorentinDu'.random_int(0, 10);
        return $this->render('user/index.html.twig', [
            'uname' => $name,
        ]);
    }
}
