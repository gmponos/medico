<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title'); ?>
        </title>
        <?= $this->Html->meta('icon'); ?>
        <?= $this->Html->css('CakeBootstrap.bootstrap'); ?>
        <?= $this->Html->css('CakeBootstrap.font-awesome'); ?>
        <?= $this->Html->css('CakeBootstrap.bootstrap-chosen'); ?>
        <?= $this->Html->css('CakeBootstrap.datepicker'); ?>
        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body style="padding-top: 70px;">
        <header>
            <div class="container">
                <h3><?= $this->fetch('title') ?></h3>
            </div>
        </header>
        <?= $this->element('navbar_top_fixed') ?>
        <div id="content">
            <div class="container">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
        </div>
        <footer>
        </footer>
        <?= $this->Html->script('CakeBootstrap.jquery.min') ?>
        <?= $this->Html->script('CakeBootstrap.bootstrap') ?>
        <?= $this->Html->script('CakeBootstrap.chosen') ?>
        <?= $this->Html->script('CakeBootstrap.datepicker') ?>
        <?= $this->Html->script('CakeBootstrap.functions') ?>
    </body>
</html>
