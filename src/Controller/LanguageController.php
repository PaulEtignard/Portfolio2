<?php

namespace App\Controller;

use App\Repository\LanguageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LanguageController extends AbstractController
{
    private LanguageRepository $languageRepository;

    /**
     * @param LanguageRepository $languageRepository
     */
    public function __construct(LanguageRepository $languageRepository)
    {
        $this->languageRepository = $languageRepository;
    }


    #[Route('/langages', name: 'app_langages')]
    public function index(): Response
    {
        $langage = $this->languageRepository->findAll();

        return $this->render('language/index.html.twig', [
            'langages' => $langage,
        ]);
    }

    #[Route('/langage/{slug}', name: 'app_langage_slug')]
    public function langageSlug($slug): Response
    {
        $langage = $this->languageRepository->findOneBy(["nom"=>$slug]);

        return $this->render('language/langage.html.twig', [
            'langage' => $langage,
        ]);
    }
}
