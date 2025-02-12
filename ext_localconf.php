<?php

defined('TYPO3') || exit('Access denied.');

$tightness = $GLOBALS['TYPO3_CONF_VARS']['EXTENSIONS']['tight']['tightness'] ?? 'tight';

$GLOBALS['TYPO3_CONF_VARS']['BE']['stylesheets']['tight'] = 'EXT:tight/Resources/Public/CSS/' . $tightness . '.css';
