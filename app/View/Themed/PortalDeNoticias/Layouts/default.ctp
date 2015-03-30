<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> <?php echo $this->fetch('title'); ?> </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css(array(
            'normalize',
            'bootstrap.min',
            'font-awesome/css/font-awesome.min',
            'default'
        ));

        echo $this->Html->script(array(
            'https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js',
            'lib/bootstrap.min',
            'application'
        ));

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div class="container">
            <!-- HEADER -->
            <div class="row">
                <?php echo $this->element('header'); ?>
            </div>

            <!-- NAVBAR -->
            <div class="row">
                <?php echo $this->element('navbar'); ?>
            </div>
            
            <!-- CONTENT -->
            <div class="row">
                <div class="col-md-2">
                    <?php echo $this->element('home/sidebar-left'); ?>
                </div>
                <div class="col-md-10">                    
                    <?php echo $this->Session->flash(); ?>

                    <?php echo $this->fetch('content'); ?>
                </div>
            </div>

            <!-- FOOTER -->
            <div class="row">
                <?php echo $this->element('footer'); ?>
            </div>

        </div>
        <?php echo $this->element('sql_dump'); ?>
    </body>
</html>
