<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.joomla-bootstrap-3-template
 *
 * @author      Adrian Fürschuß
 * @copyright   Copyright (C) 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;
?>
<div class="list-group latestnews<?= $moduleclass_sfx ?>">
    <h3 class="list-group-item"><?= $module->title ?></h3>
    <?php foreach ($list as $item) : ?>
        <a class="list-group-item" href="<?php echo $item->link; ?>">
            <?php $images = json_decode($item->images); ?>
            <?php if (isset($images->image_intro) and ! empty($images->image_intro)) :
                ?>
        <?php $imgfloat = (empty($images->float_intro)) ? "left" : $images->float_intro; ?>
                <div class="img-intro-<?php echo htmlspecialchars($imgfloat); ?>">
                    <img
                    <?php
                    if ($images->image_intro_caption):
                        echo 'class="img-rounded caption"' . ' title="' . htmlspecialchars($images->image_intro_caption) . '"';
                    else:
                        echo 'class="img-rounded"';
                    endif;
                    ?>
                        src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/>
                </div>
    <?php endif; ?>
            
            <h4 class="list-group-item-heading"><?php echo $item->title; ?></h4>
            <p class="list-group-item-text"><?php echo $item->introtext; ?></p>
        </a>
<?php endforeach; ?>
</div>
