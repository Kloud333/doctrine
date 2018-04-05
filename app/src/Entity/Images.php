<?php

namespace app\src\Entity;

/**
 * @Entity @Table(name="images")
 **/
class Images
{
    /** @id @Column(type="integer") * */
    protected $id;

    /** @Column(type="integer")* */
    protected $user_id;

    /** @Column(type="string") * */
    protected $src;
}