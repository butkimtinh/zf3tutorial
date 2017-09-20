<?php

/**
 * OnlineBiz Software Solution
 * 
 * @version 0.0.1
 * @author Joe Vu<joe@onlinebizsoft.com>
 * @see http://onlinebizsoft.com
 * @copyright (c) 2017 , OnlineBiz Software Solution
 * 
 * Create at: Sep 20, 2017 11:03:16 AM
 */

namespace Blog;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface{
    
    public function getConfig() {
        return include __DIR__.'/../config/module.config.php';
    }

}