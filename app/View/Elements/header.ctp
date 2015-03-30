<div class="col-md-9">
    <h1>Bootstrap 2.0.4</h1>
</div>
<div class="col-md-3">
    <div class="pull-right">
        <?php
        echo $this->Html->link(
            $this->Html->image('/img/icon/facebook.png', array('alt' => 'facebook')), 
            array(), 
            array(
                'original-title' => 'facebook',
                'escape' => false
            )
        );
        ?>
        <?php
        echo $this->Html->link(
            $this->Html->image('/img/icon/twitter.png', array('alt' => 'twitter')), 
            array(), 
            array(
                'original-title' => 'twitter',
                'escape' => false
            )
        );
        ?>
    </div>
</div>