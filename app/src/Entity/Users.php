<?php

namespace app\src\Entity;

/**
 * @Table(name="users",indexes={@Index(name="name", columns={"name"})})
 **/
class Users
{
    /**
     * @id
     * @Column(type="integer")
     * @GeneratedValue
     **/
    protected $id;

    /**
     * @Column(type="string")
     **/
    protected $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}