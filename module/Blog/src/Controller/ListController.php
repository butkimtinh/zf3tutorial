<?php

/**
 * OnlineBiz Software Solution
 * 
 * @version 0.0.1
 * @author Joe Vu<joe@onlinebizsoft.com>
 * @see http://onlinebizsoft.com
 * @copyright (c) 2017 , OnlineBiz Software Solution
 * 
 * Create at: Sep 20, 2017 11:15:07 AM
 */

namespace Blog\Controller;

use Blog\Model\PostRepositoryInterface;
use Zend\Mvc\Controller\AbstractActionController;
// Add the following import statement:
use Zend\View\Model\ViewModel;

class ListController extends AbstractActionController {

    /**
     * @var PostRepositoryInterface
     */
    private $postRepository;

    public function __construct(PostRepositoryInterface $postRepository) {
        $this->postRepository = $postRepository;
    }

    // Add the following method:
    public function indexAction() {
        return new ViewModel([
            'posts' => $this->postRepository->findAllPosts(),
        ]);
    }

}
