<?php

defined('TYPO3') || exit('Access denied.');

foreach (['edit', 'list', 'filelist', 'page'] as $module) {
    if ($tightness = $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['tight'][$module] ?? false) {
        $file = 'EXT:tight/Resources/Public/CSS/' . $module . '.' . $tightness . '.css';
        $GLOBALS['TYPO3_CONF_VARS']['BE']['stylesheets']['tight_' . $module] = $file;
    }
}
