<?php

namespace App\Controller;

use App\Repository\ProjetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetsController extends AbstractController
{
    private ProjetRepository $projetRepository;

    /**
 * @param ProjetRepository $projetRepository
 */public function __construct(ProjetRepository $projetRepository)
{
    $this->projetRepository = $projetRepository;

}


    #[Route('/projets', name: 'app_projets')]
    public function index(): Response
    {
        $projets = $this->projetRepository->findAll();
        return $this->render('projets/index.html.twig', [
            'projets' => $projets,
        ]);
    }

    #[Route('/projet/{slug}', name: 'app_projet_slug')]
    public function projetslug($slug): Response
    {
        $projet = $this->projetRepository->findOneBy(["slug"=>$slug]);
        return $this->render('projets/projet.html.twig', [
            'projet' => $projet,
        ]);
    }
}
