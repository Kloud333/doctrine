<?php
require_once "../bootstrap.php";

use app\src\Entity\Posts;
use Faker\Factory;

$faker = Factory::create();
$faker->seed(123);

for ($i = 1; $i < 10; $i++) {
    $posts = new Posts();
    $posts->setTitle($faker->title);
    $posts->setBody($faker->text);

    $entityManager->persist($posts);
    $entityManager->flush();
}


