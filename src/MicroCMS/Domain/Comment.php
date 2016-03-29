<?php


namespace MicroCMS\Domain;


/**
 * Class Comment
 * @package MicroCMS\Domain
 */
class Comment
{
    /**
     * Comment id
     * @var integer
     */
    protected $id;

    /**
     * Comment author
     * @var string
     */
    protected $author;

    /**
     * Comment content
     * @var string
     */
    protected $content;

    /**
     * Associated article
     * @var  \MicroCMS\Domain\Article
     */
    protected $article;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Comment
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     * @return Comment
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * @return Article
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param Article $article
     * @return Comment
     */
    public function setArticle($article)
    {
        $this->article = $article;

        return $this;
    }





}