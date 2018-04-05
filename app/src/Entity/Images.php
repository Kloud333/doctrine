<?php

namespace app\src\Entity;


class Images
{
    /** @id @Column(type="integer") * */
    protected $id;

    /** @Column(type="integer")* */
    protected $user_id;

    /** @Column(type="string") * */
    protected $src;
}