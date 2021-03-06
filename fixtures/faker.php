<?php
require_once "../bootstrap.php";

use app\src\Entity\Images;
use app\src\Entity\Posts;
use app\src\Entity\Users;
use Faker\Factory;

$faker = Factory::create();


$start = microtime(true);

for ($i = 1; $i < 1000; $i++) {

    $users = new Users();
    $users->setName($faker->name);

    $posts = new Posts();
    $posts->setTitle($faker->word);
    $posts->setBody($faker->text);
    $posts->setUser($users);

    $images = new Images();
    $images->setUser($users);
    $images->setSrc('https://' . $faker->numberBetween(1, 999999999));

    $entityManager->persist($users);
    $entityManager->persist($posts);
    $entityManager->persist($images);

    $entityManager->flush();
}

$time = microtime(true) - $start;
printf('Скрипт выполнялся %.4F сек.', $time);
