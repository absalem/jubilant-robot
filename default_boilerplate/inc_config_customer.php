<?php

// #############################################################################
// # default variables
// #############################################################################

$config['default']['multicastMail'] = false;
$config['default']['cache'] = false;

// #############################################################################
// # themes
// #############################################################################

$config['theme']['environment'] = array('cache' => 'cache/');

// #############################################################################
// # email
// #############################################################################

$config['email']['defaultFromName'] = 'menadwork';
$config['email']['defaultFrom'] = 'technik@menadwork.com';
$config['email']['defaultTo'] = 'technik@menadwork.com';
$config['email']['defaultBCC'] = 'technik@menadwork.com';

// #############################################################################
// #  language
// #############################################################################

// possible languages
$config['language']['shortNames'] = array(
    'de-DE' => 'de',
);
$config['language']['fullNames'] = array(
    'Deutsch',
);

// default language
$config['language']['default'] = 'de';

// #############################################################################
// #  page (edit)
// #############################################################################

$config['page']['possibleNaviLevel'] = 4;
$config['page']['pageSeoUrl'] = false;
$config['page']['pagetreeSortDesc'] = false;
$config['page']['autoCreateNavi'] = true;

// #############################################################################
// # page (edit) - default-settings
// #
// # can be overwritten by "DB" -> "page_template_settings"
// #
// #############################################################################

// edit-areas to hide
$config['edit']['hide'] = array(
    'areaTeaserText'         => 0,
    'areaContentImage'       => 0,
    'areaSubline'            => 0,
    'areaContentPartOptions' => 0,
    'areaSEOOptions'         => 0,
    'areaPageImage'          => 0,
    'areaPagePosition'       => 0,
    'areaTeaserIDs'          => 0,
    'areaThumbImage'         => 0,
);

// fileType: "image", "video", "txt", "pdf" (defined in )
$config['edit']['fileUpload'] = array(
    'fileType' => 'image',
);

// TinyMCE
//
// bold italic underline strikethrough alignleft aligncenter alignright alignjustify
// styleselect formatselect fontselect fontsizeselect cut copy paste bullist numlist
// outdent indent blockquote undo redo removeformat subscript superscript ...
//
$config['edit']['tinyMCE'] = array(
    'enabled'           => 1,
    'toolbar1'          => 'fullscreen | fontselect fontsizeselect | bold italic underline | charmap | image | outdent indent',
    'toolbar2'          => 'cut copy | numlist bullist | alignleft aligncenter alignright alignjustify  | undo redo | link unlink | shy | code',
    'force_br_newlines' => 'true',
    'force_p_newlines'  => 'false',
);

// #############################################################################
// #  htaccess (apache)
// #############################################################################

$config['htaccess']['staging'] = '.htaccess_only_live';
$config['htaccess']['live'] = '.htaccess';

// #############################################################################
// #  database
// #############################################################################

// psv (persil service) - testing
$config['db']['prefix'] = 'XXX_';
$config['db']['live'] = 'DB_NAME_XXX';
$config['db']['staging'] = 'DB_NAME_XXX';

$config['db']['hostname'] = 'localhost';

$config['db']['username'] = 'DB_USER_XXX';
$config['db']['password'] = 'DB_PASS_XXX';

$config['db']['port'] = 3306;
$config['db']['database'] = $config['db']['live'];
