<?php
// translators: This is a test
__('Single line comment', 'testdomain');

/*
 * translators: This is also a test
 */
__('Multiline comment, one line', 'testdomain');

/*
 * This comment includes lots of text
 *
 * translators: This is test number three
 */
__('Multiline comment, multi line', 'testdomain');

// translators: This comment doesn't do anything for translation
random_code();
__('Comment too far away from function', 'testdomain');

// Other keyword: This is a comment to the translator
__('Comment with other keyword', 'testdomain');

// translators: This is a test with stored translations
$variable = __('Stored translation with comment', 'testdomain');
