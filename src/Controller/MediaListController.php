<?php

namespace App\Controller;

use App\Repository\MediaListRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MediaListController extends AbstractController
{
    #[Route('/mediaList/{id}', name: 'show.mediaList', requirements: ['id' => '\d+'])]
    public function show(Request $request, int $id, MediaListRepository $mlr): Response
    {
        $mediaList = $mlr->find($id);
        $medias = $mediaList->getMedia();
        //dd($mediaList);
        return $this->render('mediaList.html.twig', [
            'controller_name' => 'MediaListController',
            'mediaList' => $mediaList,
            'medias' => $medias,
            'poster' => $mediaList->getPath() . $mediaList->getTitle() .'.jpg'
        ]);
    }
}
