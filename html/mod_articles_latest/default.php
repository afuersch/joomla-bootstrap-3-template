<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.joomla-bootstrap-3-template
 *
 * @copyright   Copyright (C) 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
?>
<div class="list-group latestnews<?php echo $moduleclass_sfx; ?>">
    <?php foreach ($list as $item) : ?>
        <a class="list-group-item" href="<?php echo $item->link; ?>">
            <h4 class="list-group-item-heading"><?php echo $item->title; ?></h4>
            <p class="list-group-item-text"><?php echo $item->introtext; ?></p>
        </a>
    <?php endforeach; ?>
</div>
