<?php

namespace MicroCMS\Domain;


/**
 * Class Article
 * @package MicroCMS\Domain
 */
class Article
{

    /**
     * Atricle id
     * @var integer
     */
    protected $id;

    /**
     * Article title
     * @var string
     */
    protected $title;

    /**
     * Article content
     * @var string
     */
    protected $content;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Article
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }



}