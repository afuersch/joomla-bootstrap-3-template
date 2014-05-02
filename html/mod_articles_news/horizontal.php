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

<div class="row newsflash-horiz<?php echo $params->get('moduleclass_sfx'); ?>">
<?php $columnSize = 12 / count($list); ?>
<?php for ($i = 0, $n = count($list); $i < $n; $i ++) :
	$item = $list[$i]; ?>    
    <div class="highlight <?php echo "col-md-" . $columnSize; ?>">
	<?php require JModuleHelper::getLayoutPath('mod_articles_news', '_item');

	if ($n > 1 && (($i < $n - 1) || $params->get('showLastSeparator'))) : ?>

	<span class="article-separator">&#160;</span>

	<?php endif; ?>
    </div>
<?php endfor; ?>
</div>