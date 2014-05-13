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
$item_heading = $params->get('item_heading', 'h4');
$images = json_decode($item->images);
?>
<?php if ($params->get('item_title')) : ?>

    <<?= $item_heading; ?> class="newsflash-title<?php echo $params->get('moduleclass_sfx'); ?>">
    <?php if ($params->get('link_titles') && $item->link != '') : ?>
        <a href="<?php echo $item->link; ?>">
            <?php echo $item->title; ?></a>
    <?php else : ?>
        <?php echo $item->title; ?>
    <?php endif; ?>
    </<?= $item_heading; ?>>

<?php endif; ?>

<?php
if (!$params->get('intro_only')) :
    echo $item->afterDisplayTitle;
endif;
?>

<?= $item->beforeDisplayContent; ?>

<?php if (isset($images->image_intro) and !empty($images->image_intro)) : ?>
    <?php $imgfloat = (empty($images->float_intro)) ? $params->get('float_intro') : $images->float_intro; ?>
    <div class="img-intro-<?php echo htmlspecialchars($imgfloat); ?>">
        <img
        <?php
        if ($images->image_intro_caption):
            echo 'class="caption"' . ' title="' . htmlspecialchars($images->image_intro_caption) . '"';
        endif;
        ?>
            src="<?php echo htmlspecialchars($images->image_intro); ?>" alt="<?php echo htmlspecialchars($images->image_intro_alt); ?>"/>
    </div>
<?php endif; ?>

<?= $item->introtext; ?>

<?php
if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) :
    echo '<a class="readmore" href="' . $item->link . '">' . $item->linkText . '</a>';
endif;
?>
