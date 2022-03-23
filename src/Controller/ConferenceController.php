<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferenceController extends AbstractController
{
    #[Route('/hello/{name}', name: 'app_conference')]
    public function index($name)
    {
        
        return $this->render('conference/index.html.twig', [
            'name' => $name
        ]);

        /*       
         Mala practica:
        return new Response(<<<EOF
          <html>
            <body>
                $greet
                <img src="/images/"under-construction.gif" />
            </body>
          </html>
        EOF); */
    }
}
