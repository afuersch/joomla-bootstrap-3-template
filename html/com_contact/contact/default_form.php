<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.joomla-bootstrap-3-template
 *
 * @copyright   Copyright (C) 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidation');

if (isset($this->error)) :
    ?>
    <div class="contact-error">
        <?php echo $this->error; ?>
    </div>
<?php endif; ?>

<?php
$colLeft = 2;
$colRight = 12 - $colLeft
?>

<div class="contact-form">
    <form id="contact-form" role="form" action="<?php echo JRoute::_('index.php'); ?>" method="post" class="form-validate form-horizontal">
        <fieldset>
            <legend><?php echo JText::_('COM_CONTACT_FORM_LABEL'); ?></legend>
            <div class="form-group">
                <div class="col-sm-<?= $colLeft ?> control-label"><?php echo $this->form->getLabel('contact_name'); ?></div>
                <div class="col-sm-<?= $colRight ?>">
                    <?php echo $this->form->getInput('contact_name'); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-<?= $colLeft ?> control-label"><?php echo $this->form->getLabel('contact_email'); ?></div>
                <div class="col-sm-<?= $colRight ?>">
                    <?php echo $this->form->getInput('contact_email'); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-<?= $colLeft ?> control-label"><?php echo $this->form->getLabel('contact_subject'); ?></div>
                <div class="col-sm-<?= $colRight ?>">
                    <?php echo $this->form->getInput('contact_subject'); ?>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-<?= $colLeft ?> control-label"><?php echo $this->form->getLabel('contact_message'); ?></div>
                <div class="col-sm-<?= $colRight ?>">
                    <?php echo $this->form->getInput('contact_message'); ?>
                </div>
            </div>
            <?php if ($this->params->get('show_email_copy')) { ?>
                <div class="form-group">
                    <div class="col-sm-offset-<?= $colLeft ?> col-sm-<?= $colRight ?>">
                        <div class="checkbox">
                            <?php
                            $emailCopyLabel = $this->form->getLabel('contact_email_copy');
                            $result = preg_split('/">/', $emailCopyLabel);
                            echo $result[0] . '">';
                            echo $this->form->getInput('contact_email_copy');
                            echo $result[1];
                            ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php //Dynamically load any additional fields from plugins. ?>
            <?php foreach ($this->form->getFieldsets() as $fieldset) : ?>
                <?php if ($fieldset->name != 'contact'): ?>
                    <?php $fields = $this->form->getFieldset($fieldset->name); ?>
                    <?php foreach ($fields as $field) : ?>
                        <div class="form-group">
                            <?php if ($field->hidden) : ?>
                                <?php echo $field->input; ?>
                            <?php else: ?>
                                <div class="col-sm-<?= $colLeft ?> control-label">
                                    <?php echo $field->label; ?>
                                    <?php if (!$field->required && $field->type != "Spacer") : ?>
                                        <span class="optional"><?php echo JText::_('COM_CONTACT_OPTIONAL'); ?></span>
                                    <?php endif; ?>
                                </div>
                                <?php echo $field->input; ?>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                <?php endif ?>
            <?php endforeach; ?>
            <div class="form-actions">
                <div class="form-group">
                    <div class="col-sm-offset-<?= $colLeft ?> col-sm-<?= $colRight ?>">
                        <button class="btn btn-primary validate" type="submit"><?php echo JText::_('COM_CONTACT_CONTACT_SEND'); ?></button>
                    </div>
                </div>
                <input type="hidden" name="option" value="com_contact" />
                <input type="hidden" name="task" value="contact.submit" />
                <input type="hidden" name="return" value="<?php echo $this->return_page; ?>" />
                <input type="hidden" name="id" value="<?php echo $this->contact->slug; ?>" />
                <?php echo JHtml::_('form.token'); ?>
            </div>
        </fieldset>
    </form>
</div>
