<?php

namespace App\DataFixtures;



use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class Language extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create("fr_FR");
        for ($i=1;$i<15;$i++){
            $Language = new \App\Entity\Language();
            $Language->setNom($faker->word);
            $Language->setDescription($faker->paragraphs($faker->numberBetween(1,2),true));
            $Language->setMaitrise($faker->randomFloat(1,1,10));
            $this->addReference("langage".$i,$Language);
            $manager->persist($Language);
        }

        $manager->flush();
    }
}
