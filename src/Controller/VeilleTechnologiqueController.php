<?php

namespace App\Controller;

use FeedIo\Adapter\Http\Client;
use FeedIo\FeedIo;
use feedly\AccessTokenStorage\AccessTokenSessionStorage;

use feedly\Mode\SandBoxMode;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpClient\HttplugClient;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class VeilleTechnologiqueController extends AbstractController
{

    #[Route('/veille_technologique', name: 'app_veille_technologique',methods:['GET'],priority:1)]
    public function index(): Response
    {
        return $this->render('veille_technologique/index.html.twig', [
            "NomRecherche"=>null
        ]);
    }
    #[Route('/veille_technologique/IA', name: 'app_veille_technologique_IA',methods:['GET'],priority:1)]
    public function rechercheIA(): Response
    {
        $recherche = "artificial intelligence";

        $client = new Client(new HttplugClient());
        $feedIo = new FeedIo($client);
        $result = $feedIo->read("https://news.google.com/rss/search?q=".$recherche);
        $content = $result->getFeed();

        return $this->render('veille_technologique/Actualite.html.twig', [
            'Data'=> $content,
            'NomRecherche'=>$recherche,
            "now"=>New \DateTime()
        ]);
    }

    #[Route('/veille_technologique/nvdia', name: 'app_veille_technologique_nvidia',methods:['GET'],priority:1)]
    public function rechercheNvdia(): Response
    {
        $recherche = "Nvdia";

        $client = new Client(new HttplugClient());
        $feedIo = new FeedIo($client);
        $result = $feedIo->read("https://news.google.com/rss/search?q=".$recherche);
        $content = $result->getFeed();

        return $this->render('veille_technologique/Actualite.html.twig', [
            'Data'=> $content,
            'NomRecherche'=>$recherche,
            'now'=>new \DateTime()
        ]);
    }
}
