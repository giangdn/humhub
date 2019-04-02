<?php

use humhub\modules\directory\widgets\Menu;
use humhub\modules\directory\widgets\Sidebar;
use humhub\widgets\FooterMenu;

\humhub\assets\JqueryKnobAsset::register($this);
?>

<div class="container">
    <div class="row">
        <div class="col-md-2 layout-nav-container">
            <?= Menu::widget(); ?>
        </div>
        <div class="col-md-7 layout-content-container">
            <?= $content; ?>
        </div>
        <div class="col-md-3 layout-sidebar-container">
            <?= Sidebar::widget(); ?>
            <?= FooterMenu::widget(['location' => FooterMenu::LOCATION_SIDEBAR]); ?>
        </div>
    </div>
</div>
