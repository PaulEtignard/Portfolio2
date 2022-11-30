<?php

namespace App\DataFixtures;

use App\Entity\Projet;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\String\Slugger\SluggerInterface;

class Porjet extends Fixture
{
    private SluggerInterface $slugger;

    /**
     * @param SluggerInterface $slugger
     */
    public function __construct(SluggerInterface $slugger)
    {
        $this->slugger = $slugger;
    }


    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create("fr-FR");
        for ($i=1;$i<8;$i++){
            $dateFin = null;
            $Projet = new Projet();
            $Projet->setNom($faker->word)
                ->setDescription($faker->paragraphs($faker->numberBetween(1,3),true))
                ->setCreatedAt($faker->dateTimeBetween('-1 years','now'));
            if ($faker->boolean(50)){
                $dateFin = $faker->dateTimeBetween($Projet->getCreatedAt(),'now');
            }
            $Projet->setDateFin($dateFin)
                ->setDifficulté($faker->randomFloat(1,1,10))
                ->setSlug($this->slugger->slug($Projet->getNom()));

            $nblangage = $faker->numberBetween(1,3);
            if ($nblangage == 1){
                $Projet->addLanguage($this->getReference("langage".$faker->numberBetween(1,14)));
            } elseif ($nblangage == 2){
                $Projet->addLanguage($this->getReference("langage".$faker->numberBetween(1,14)));
                $Projet->addLanguage($this->getReference("langage".$faker->numberBetween(1,14)));
            } elseif ($nblangage == 3){
                $Projet->addLanguage($this->getReference("langage".$faker->numberBetween(1,14)));
                $Projet->addLanguage($this->getReference("langage".$faker->numberBetween(1,14)));
                $Projet->addLanguage($this->getReference("langage".$faker->numberBetween(1,14)));
            }

            $manager->persist($Projet);
        }

        $manager->flush();
    }
}
