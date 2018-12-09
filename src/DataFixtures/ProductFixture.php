<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $product = new Product();
	$product->setName("foo");
	$product->setPrice(100);
        $manager->persist($product);

        $product = new Product();
	$product->setName("bar");
	$product->setPrice(200);
        $manager->persist($product);

        $manager->flush();
    }
}
