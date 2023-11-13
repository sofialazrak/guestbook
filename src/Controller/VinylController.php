<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VinylController extends AbstractController
{
    #[Route('/')]
    public function index(): Response
    {
        $tracks = [
            ['song'=> 'Gangsta\'s Paradise' , 'artist' => 'Coolio'],
            ['song'=>'Waterfalls' , 'artist' => 'TLC'],
            ['song'=>'Creep' , 'artist' => 'Radiohead'],
            ['song'=>'Kiss from a Rose' , 'artist' => 'Seal'],
            ['song'=>'On Bended Knee' , 'artist' => 'Boyz II Men'],
            ['song'=>'Fantasy' , 'artist' => 'Mariah Carey'],
        ];
        return $this->render('vinyl/index.html.twig', [
            'title' => "PB and Jams",
            'tracks' => $tracks,
        ]);
    }
}
