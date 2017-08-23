<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Product;

class LoadProductData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        foreach($this->getAirPlainesProducts() as $airPlainesProduct) {
            $product = new Product();
            $product->setName($airPlainesProduct['name']);

            $manager->persist($product);
            $manager->flush();
        }
    }

    /**
     * @return array
     */
    private function getAirPlainesProducts(): array
    {
        return $categories = [
            [
                'name' => 'Boeing 767',
            ],
            [
                'name' => 'Ту-144',
            ],
            [
                'name' => 'AirBus 320',
            ],
            [
                'name' => 'AirBus 330',
            ],
            [
                'name' => 'Ан-2',
            ],
            [
                'name' => 'Ан-218',
            ],
            [
                'name' => 'Bombardier Global 7000',
            ],
            [
                'name' => 'Boeing 787 Dreamliner',
            ],
            [
                'name' => 'Mitsubishi Regional Jet',
            ],
            [
                'name' => 'McDonnell Douglas MD-90',
            ]
        ];
    }

}