<?php
/**
 * NOVIUS OS - Web OS for digital communication
 *
 * @copyright  2011 Novius
 * @license    GNU Affero General Public License v3 or (at your option) any later version
 *             http://www.gnu.org/licenses/agpl-3.0.html
 * @link http://www.novius-os.org
 */

Nos\I18n::current_dictionary('noviusos_form::common');

return array(
    'model' => 'Nos\Form\Model_Form',
    'inspectors' => array(),
    'i18n' => array(
        'item' => __('form'),
        'items' => __('forms'),
        'showNbItems' => __('Showing {{x}} forms out of {{y}}'),
        'showOneItem' => __('Showing 1 form'),
        'showNoItem' => __('No forms'),
        // Note to translator: This is the action that clears the 'Search' field
        'showAll' => __('Show all forms'),
    ),
);
