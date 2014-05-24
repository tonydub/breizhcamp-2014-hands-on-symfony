<?php

namespace Breizhcamp\Infrastructure\InfraBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\Persistence\ObjectManager;
use Faker;

use Acme\BlogBundle\Entity\Page;

class LoadPageData extends AbstractFixture
{
    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $faker = Faker\Factory::create('fr');

        for ($i = 0; $i < 100; $i++) {

            $title = $faker->unique()->realText($maxNbChars = 55);
            $body = $faker->realText($maxNbChars = 255);

            $page = new Page;
            $page
                ->setTitle($title)
                ->setBody($body)
            ;

            $manager->persist($page);
        }

        $manager->flush();
    }
}
