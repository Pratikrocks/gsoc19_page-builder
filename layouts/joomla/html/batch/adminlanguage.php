<?php
/**
 * @package     Joomla.Site
 * @subpackage  Layout
 *
 * @copyright   Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('JPATH_BASE') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;

/**
 * Layout variables
 * ---------------------
 * None
 */

HTMLHelper::_('script', 'layouts/joomla/html/batch/batch-language.min.js', ['version' => 'auto', 'relative' => true]);

?>
<label id="batch-language-lbl" for="batch-language-id">
	<?php echo Text::_('JLIB_HTML_BATCH_LANGUAGE_LABEL'); ?>
</label>
<select name="batch[language_id]" class="custom-select" id="batch-language-id">
	<option value=""><?php echo Text::_('JLIB_HTML_BATCH_LANGUAGE_NOCHANGE'); ?></option>
	<?php echo HTMLHelper::_('select.options', HTMLHelper::_('adminlanguage.existing', true, true), 'value', 'text'); ?>
</select>
