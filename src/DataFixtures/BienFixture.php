<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Bien;
use Faker\Factory;

class BienFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
    	$faker = Factory::create('fr_FR');
    	for ($i = 0; $i < 25; $i ++) 
    	{ 
    		$bien = new Bien();

    		$bien -> setDescription($faker->sentence($nbWords = 10, $variableNbWords = true))
    			  -> setPrix($faker->numberBetween(1000, 8000))
    			  -> setSurface($faker->numberBetween(20, 350))
    			  -> setNombrepiece($faker->numberBetween(1, 8))
    			  -> setNombrechambre($faker->numberBetween(1, 8))
    			  -> setEtage($faker->numberBetween(0, 50))
    			  -> setAdresse($faker->city)
    			  -> setLieu($faker->city)
    			  -> setDateconstruction($faker->numberBetween(1980, 2019))
    			  -> setImage('image.png');
    		$manager->persist($bien);
    	}
        $manager->flush();
    }
}
