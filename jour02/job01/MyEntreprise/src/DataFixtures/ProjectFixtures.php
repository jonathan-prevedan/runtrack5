<?php
namespace App\DataFixtures;

use DateTime;
use App\Entity\Projets;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProjectFixtures extends Fixture
{
    public function load(ObjectManager $manager)

    
    {
        for ($i = 0; $i < 10; $i++) {
            $title = 'Article';
            $content = 'test';
            $image = 'http://placehold.it/350x150';

            $projet = new Projets();
            $projet->setTitle($title.$i);
            $projet->setContent('<p>test</p>');
            $projet->setImage($image);
            $projet->setCreatedAt(new DateTime('today'));
            $manager->persist($projet);
        }
        
        $manager->flush();
    }
}
