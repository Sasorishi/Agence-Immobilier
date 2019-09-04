<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Client;
use Faker\Factory;

class ClientFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('fr_FR');
    	for ($i = 0; $i < 25; $i ++) 
    	{ 
    		$client = new Client();
    		$client -> setNomclient($faker->firstName)
    			  	-> setPrenomclient($faker->lastName)
    			  	-> setTelclient($faker->phoneNumber)
    			  	-> setEmailclient($faker->email)
    			  	-> setMdpClient($faker->word)
    			  	-> setImage('image.png');
    		$manager->persist($client);
    	}
        $manager->flush();
    }
}
