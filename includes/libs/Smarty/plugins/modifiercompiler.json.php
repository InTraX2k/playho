<?php
/**
 * Smarty plugin — json modifier (alias for json_encode)
 * @package    Smarty
 * @subpackage PluginsModifierCompiler
 */
function smarty_modifiercompiler_json($params) {
    return 'json_encode(' . $params[0] . ')';
}
