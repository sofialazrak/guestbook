<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class FirstController extends AbstractController
{
//    #[Route('/', name: 'homepage')]
//    public function index(): Response
//    {
////        return $this->render('first/index.html.twig', [
////            'controller_name' => 'FirstController',
////        ]);
//        return new Response(<<<EOF
//            <html>
//                <body>
//                    <img src="images/under-construction.gif" />
//                </body>
//            </html>
//            EOF
//        );
//    }

//    public function index(Request $request) : Response
//    {
//        $greet = '';
//        if($name = $request->query->get('hello')){
//            $greet = sprintf('<h1>Hello %s</h1>', htmlspecialchars($name));
//        }
//
//        return  new Response (<<<EOF
//            <html>
//                <body>
//                    $greet
//                </body>
//            </html>
//        EOF);
//    }

      #[Route('/genres/{slug}', name: 'genres')]
      public function index(string $slug = '') : Response
      {
          if($slug){
                $title = "Genre: ".str_replace('-', ' ', $slug);
          }
          else{
              $title = "All genre";
          }
          return new Response ($title);
      }

      // Not clean or scalable so use templates
}
