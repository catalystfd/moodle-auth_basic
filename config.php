<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version information
 *
 * @package    auth_basic
 * @copyright  Brendan Heyood <brendan@catalyst-au.net>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

if (!isset($config->send401)) {
    $config->send401 = false;
}
$yesno = array(get_string('no'), get_string('yes'));

?>
<table cellspacing="0" cellpadding="5" border="0">
<tr valign="top">
    <td align="right">
        <label for="start_tls"><?php print_string('send401', 'auth_basic') ?></label>
    </td>
    <td>
        <?php echo html_writer::select($yesno, 'send401', $config->send401, false); ?>
    </td>
    <td>
        <?php print_string('send401_help', 'auth_basic') ?>
    </td>
</tr>
</table>
