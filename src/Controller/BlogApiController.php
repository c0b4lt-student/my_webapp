<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogApiController extends AbstractController
{
    //Here we can see two methods (f) "show and edit" who have same route.
    //Show is called if url method is GET or HEAD
    //edit is used if url method is POST
    /*
     * HTML forms only support GET and POST methods. If you're calling a route with a different method from an HTML form,
     *  add a hidden field called _method with the method to use (e.g. <input type="hidden" name="_method" value="PUT">).
     *  If you create your forms with Symfony Forms this is done automatically for you when the framework.http_method_override option is true.
     */
    //Show() allow request GET and HEAD only if ID is lower than 1000, so if id > 1000 the only allowed method is PUT
    #[Route(
        '/posts/{id}',
        methods: ['GET', 'HEAD'],
        condition: "params['id'] < 1000"
    )]
    public function show(int $id): Response
    {
        return $this->render('blog_api/index.html.twig', [
            'method' => 'show',
        ]);
    }

    #[Route('/posts/{id}', methods: ['PUTS'])]
    public function edit(int $id): Response
    {
        return $this->render('blog_api/index.html.twig', [
            'method' => 'edit',
        ]);
    }

    #[Route(
        '/contact',
        name: 'contact',
        condition: "context.getMethod() in ['GET', 'HEAD'] and request.headers.get('User-Agent') matches '/firefox/i'",
    )]
    public function contact(): Response
    {
        return $this->render('blog_api/index.html.twig', [
            'method' => 'contact',
        ]);
    }
}
