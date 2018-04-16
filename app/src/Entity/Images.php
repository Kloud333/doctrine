<?php

namespace app\src\Entity;

/**
 * @Entity @Table(name="images")
 **/
class Images
{
    /** @id
     * @Column(type="integer")
     * @GeneratedValue
     **/
    protected $id;

    /**
     * @ManyToOne(targetEntity="Users")
     **/
    protected $user;

    /**
     * @Column(type="string")
     **/
    protected $src;

    /**
     * @return mixed
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * @param mixed $src
     */
    public function setSrc($src)
    {
        $this->src = $src;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser(Users $user)
    {
        $this->user = $user;
    }
}