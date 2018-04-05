<?php

namespace app\src\Entity;

/**
 * @Entity @Table(name="users")
 **/
/**
 * @Entity @Table(name="users")
 **/
class User
{
    /** @id @Column(type="integer") @GeneratedValue * */
    protected $id;

    /** @Column(type="string") * */
    protected $name;
}