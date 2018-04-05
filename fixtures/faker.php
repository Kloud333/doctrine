<?php
require_once "../bootstrap.php";

use app\src\Entity\Posts;
use Faker\Factory;

$faker = Factory::create();

for ($i = 1; $i < 10; $i++) {
    $posts = new Posts();
    $posts->setTitle($faker->title);
    $posts->setBody($faker->text);
    $posts->setUserId($faker->numberBetween(1,10));

    $entityManager->persist($posts);
    $entityManager->flush();
}


