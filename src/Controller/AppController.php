<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link      http://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   http://www.opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Database\Type;
use Cake\I18n\Time;

/**
 * Application Controller
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link http://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 * @property \CakeBootstrap\Controller\Component\BootstrapFlashComponent $Flash
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     * Use this method to add common initialization code like loading components.
     *
     * @return void
     */
    public function initialize()
    {
        Time::setToStringFormat('yyyy-MM-dd HH:mm');
        parent::initialize();
        $this->loadComponent('Flash', [
            'className' => 'CakeBootstrap.BootstrapFlash',
        ]);
    }
}
