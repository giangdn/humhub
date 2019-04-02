<?php

use humhub\widgets\FooterMenu;

?>
<div class="container">
    <div class="row">
        <div class="col-md-3 layout-nav-container">
            <?= \humhub\modules\admin\widgets\AdminMenu::widget(); ?>
        </div>
        <div class="col-md-9 layout-content-container">
            <?= $content; ?>
            <?= FooterMenu::widget(); ?>
        </div>
    </div>
</div>
