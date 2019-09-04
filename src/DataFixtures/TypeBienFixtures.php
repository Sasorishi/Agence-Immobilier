<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\TypeBien;

class TypeBienFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $categorie = array('maison', 'appartement', 'bureau', 'immeuble', 'terrain', 'local commercial', 'parking');
    	for ($i = 0; $i < 7; $i ++)
    	{ 
    		$typebien = new TypeBien();
    		$typebien -> setLibelletypebien($categorie[$i]);
    		$manager->persist($typebien);
    	}
        $manager->flush();
    }
}
