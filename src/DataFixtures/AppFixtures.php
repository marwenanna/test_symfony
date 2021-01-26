<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use App\Entity\TbleGovernorat;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');

        for($j=0;$j<=25;$j++){
            $governorat = new TbleGovernorat();
            $governorat->setGovernorat($faker->city);
            $manager->persist($governorat);

        }
        $manager->flush();
    }
}
