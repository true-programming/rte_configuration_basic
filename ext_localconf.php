<?php

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// Add new RTE preset
$GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['default'] = 'EXT:rte_configuration_basic/Configuration/RTE/Default.yaml';
