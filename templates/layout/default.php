<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <!-- in your HTML head -->

<!--    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-ZuaQkO9MStXjaxL1n/LWx3xPqVPcgDNjn+vByI7kzP9oOcO3z1eQHVJEfM5jKcI" crossorigin="anonymous"></script>-->
    <?php echo $this->Html->script('jquery-3.6.1.min.js') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?php
    echo $this->Html->css('BootstrapUI.bootstrap.min');
    echo $this->Html->css(['BootstrapUI./font/bootstrap-icons', 'BootstrapUI./font/bootstrap-icon-sizes']);
    echo $this->Html->script(['BootstrapUI.popper.min', 'BootstrapUI.bootstrap.min']);
    echo $this->Html->css('custom.css');

    ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-nav">

    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
