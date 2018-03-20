<?php

namespace app\src\Entity;

/**
 * @Entity @Table(name="posts")
 **/
class Posts
{
    /** @id @Column(type="integer") @GeneratedValue * */
    protected $id;

    /** @Column(type="string") * */
    protected $title;

    /** @Column(type="string") * */
    protected $body;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title): void
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body): void
    {
        $this->body = $body;
    }
}
