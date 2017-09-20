<?php

/**
 * OnlineBiz Software Solution
 * 
 * @version 0.0.1
 * @author Joe Vu<joe@onlinebizsoft.com>
 * @see http://onlinebizsoft.com
 * @copyright (c) 2017 , OnlineBiz Software Solution
 * 
 * Create at: Sep 20, 2017 11:29:21 AM
 */

namespace Blog\Model;

class Post
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $text;

    /**
     * @var string
     */
    private $title;

    /**
     * @param string $title
     * @param string $text
     * @param int|null $id
     */
    public function __construct($title, $text, $id = null)
    {
        $this->title = $title;
        $this->text = $text;
        $this->id = $id;
    }

    /**
     * @return int|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
}