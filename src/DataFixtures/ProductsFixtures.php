<?php

namespace App\DataFixtures;

use App\Entity\Products;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductsFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i=1; $i <=5 ; $i++) { 
            $product = new Products();
            $product ->setProdName("Painting n°$i")
                     ->setDescription("<p>Description n°$i</p>")
                     ->setImage("http://placehold.it/350x150")
                     ->setAddAt(new \DateTime())
                     ->setSize("40x60x10cm")
                     ->setQuantity("1")
                     ->setPriceArtist("500")
                     ->setPriceSite("575")
                     ->setCategoryId("1")
                     ->setArtistId("1");

                     
            $manager->persist($product);
        }
        $manager->flush();
    }
        
        
}
