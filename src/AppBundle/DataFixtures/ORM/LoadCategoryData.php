<?php

namespace AppBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Entity\Category;

class LoadCategoryData implements FixtureInterface
{
    public function load(ObjectManager $manager)
    {
        foreach ($this->getCategories() as $fakeCategory) {
            $category = new Category();
            $category->setName($fakeCategory['name']);
            $category->setSort($fakeCategory['sort']);
            $manager->persist($category);
            $manager->flush();
        }
    }

    /**
     * @return array
     */
    private function getCategories(): array
    {
        return $categories = [
            [
                'name' => 'Самолеты',
                'sort' => '100'
            ],
            [
                'name' => 'Корабли',
                'sort' => '200'
            ],
            [
                'name' => 'Автомобили',
                'sort' => '300'
            ],
            [
                'name' => 'Поезда',
                'sort' => '400'
            ]
        ];
    }
}