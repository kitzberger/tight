<?php

defined('TYPO3') || exit('Access denied.');

foreach (['context', 'edit', 'filelist', 'list', 'modulebar', 'page'] as $module) {
    if ($tightness = $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['tight'][$module] ?? false) {
        $file = 'EXT:tight/Resources/Public/CSS/' . $module . '.' . $tightness . '.css';
        $GLOBALS['TYPO3_CONF_VARS']['BE']['stylesheets']['tight_' . $module] = $file;
    }
}
