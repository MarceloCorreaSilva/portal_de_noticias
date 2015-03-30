<?php for ($i = 0; $i < 3; $i++) : ?>
    <div class="col-md-4">
        <div class="thumbnail">
            <?php
            echo $this->Html->link(
                $this->Html->image('http://placehold.it/350x150', array()), 
    //            '#myModal' . $i, 
                array(),
                array(
                    'data-toggle' => 'modal',
                    'escape' => false
                )
            );
            ?>
    <!--        <div class="modal hide" id="myModal<?php echo $i; ?>">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Modal header</h3>
                    <img src="http://placehold.it/600x300" style="width:600px; height:300px"/>
                </div>
            </div>-->

            <a class="btn center-block" href="#">
                Lorem Ipsum is simply dummy<br/> text of the printing
            </a>
        </div>
    </div>
<?php endfor; ?>