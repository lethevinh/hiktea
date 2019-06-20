<?php

namespace App\DataFixtures;

use App\DataFixtures\Traits\TimestampableTrait;
use App\Entity\Post;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\PropertyAccess\PropertyAccess;
class PostFixtures extends Fixture
{
    use TimestampableTrait;

    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 5; $i++) {
            $post = $this->make(new Post(), [
                "title" => "Post title-$i",
                "description" => "Post-description-$i",
                "content" => "Post-content-$i",
            ]);
            $manager->persist($post);
        }

        $manager->flush();
    }

    public function make(Post $post, $data)
    {
        $accessor = PropertyAccess::createPropertyAccessorBuilder()
            ->enableExceptionOnInvalidIndex()
            ->getPropertyAccessor();

        $title = $accessor->getValue($data, '[title]');
        $description = $accessor->getValue($data, '[description]');
        $content = $accessor->getValue($data, '[content]');

        $post->setTitle($title);
        $post->setDescription($description);
        $post->setContent($content);

        $this->timestamp($post);

        return $post;
    }
}
