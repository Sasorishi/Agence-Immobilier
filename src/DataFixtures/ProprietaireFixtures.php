<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Proprietaire;
use Faker\Factory;

class ProprietaireFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
    	for ($i = 0; $i < 25; $i ++) 
    	{ 
    		$proprietaire = new Proprietaire();
    		$proprietaire -> setNomproprietaire($faker->firstName)
    			  	-> setPrenomproprietaire($faker->lastName)
    			  	-> setTelproprietaire($faker->phoneNumber)
    			  	-> setEmailproprietaire($faker->email)
    			  	-> setMdpproprietaire($faker->word)
    			  	-> setImage('image.png');
    		$manager->persist($proprietaire);
    	}
        $manager->flush();
    }
}
