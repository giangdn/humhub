<?php

use humhub\widgets\FooterMenu;

?>
<div class="container">
    <div class="row">
        <div class="col-md-3 layout-nav-container">
            <?php
            echo \humhub\modules\user\widgets\AccountMenu::widget(); ?>
        </div>
        <div class="col-md-9 layout-content-container">
            <div class="panel panel-default">
                <?php echo $content; ?>
            </div>
            <?= FooterMenu::widget(['location' => FooterMenu::LOCATION_FULL_PAGE]); ?>
        </div>
    </div>
</div>
