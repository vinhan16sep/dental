<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code


/**
 * HTTP Success code
 */
defined('HTTP_SUCCESS') OR define('HTTP_SUCCESS', 200);


/**
 * HTTP Error code
 */
defined('HTTP_BAD_REQUEST') OR define('HTTP_BAD_REQUEST', 400);
defined('HTTP_NOT_FOUND') OR define('HTTP_NOT_FOUND', 404);

/*==============================
=            Message for Create            =
==============================*/

/**
 * Message Success code
 */
defined('MESSAGE_CREATE_SUCCESS') OR define('MESSAGE_CREATE_SUCCESS', 'Th??m m???i th??nh c??ng!');

/**
 * Message Success code
 */
defined('MESSAGE_CREATE_ERROR') OR define('MESSAGE_CREATE_ERROR', 'Th??m m???i th???t b???i!');

/**
 * Message Photos are too large code
 */
defined('MESSAGE_PHOTOS_ERROR') OR define('MESSAGE_PHOTOS_ERROR', 'H??nh ???nh v?????t qu?? %u Kb. Vui l??ng ki???m tra l???i v?? th???c hi???n l???i thao t??c!');

/**
 * Message Pfile extension
 */
defined('MESSAGE_FILE_EXTENSION_ERROR') OR define('MESSAGE_FILE_EXTENSION_ERROR', '??u??i file image ph???i l?? jpg | jpeg | png | gif!');

/*=====  End of Message for Create  ======*/
/*==============================
=            Message for remove            =
==============================*/

/**
 * Message Success code
 */
defined('MESSAGE_REMOVE_SUCCESS') OR define('MESSAGE_REMOVE_SUCCESS', 'X??a th??nh c??ng!');

/**
 * Message error code
 */
defined('MESSAGE_REMOVE_ERROR') OR define('MESSAGE_REMOVE_ERROR', 'X??a th???t b???i!');

/**
 * Message foreign key link check product category and check product
 */
defined('MESSAGE_FOREIGN_KEY_LINK_ERROR') OR define('MESSAGE_FOREIGN_KEY_LINK_ERROR', 'Category v???n c??n %s b??i vi???t v?? c?? %s category l?? con n??n kh??ng th??? x??a!');

/**
 * Message foreign key check product category and check product
 */
defined('MESSAGE_FOREIGN_KEY_ERROR') OR define('MESSAGE_FOREIGN_KEY_ERROR', 'Floor v???n c??n %s B??n n??n kh??ng th??? x??a!');


/**
 * Message check id product category 
 */
defined('MESSAGE_ID_ERROR') OR define('MESSAGE_ID_ERROR', 'ID ph???i l?? s??? v?? l???n h??n 0');

/**
 * Message file extension
 */
defined('MESSAGE_FILE_EXTENSION_ERROR') OR define('MESSAGE_FILE_EXTENSION_ERROR', '??u??i file image ph???i l?? jpg | jpeg | png | gif!');


/**
 * Message deactive banner
 */
defined('MESSAGE_DEACTIVE_BANNER_ERROR') OR define('MESSAGE_DEACTIVE_BANNER_ERROR', 'B???n ph???i t???t banner!');
defined('MESSAGE_ERROR_BANNER_ERROR') OR define('MESSAGE_ERROR_BANNER_ERROR', 'Kh??ng th??? t???t!');

/**
 * Message file extension
 */
defined('MESSAGE_EMPTY_IMAGE_ERROR') OR define('MESSAGE_EMPTY_IMAGE_ERROR', 'B???n ph???i ch???n h??nh ???nh');

/*=====  End of Message for remove  ======*/

/*==============================
=            Message for Edit            =
==============================*/

/**
 * Message Success code
 */
defined('MESSAGE_EDIT_SUCCESS') OR define('MESSAGE_EDIT_SUCCESS', 'S???a th??nh c??ng!');


/**
 * Message Success code
 */
defined('MESSAGE_ISSET_ERROR') OR define('MESSAGE_ISSET_ERROR', 'ID kh??ng t???n t???i!');

/**
 * Message Success code
 */
defined('MESSAGE_EDIT_ERROR') OR define('MESSAGE_EDIT_ERROR', 'S???a th???t b???i!');
/**
 * Message Success code
 */
defined('MESSAGE_ERROR_UPDATE_TURN_ON') OR define('MESSAGE_ERROR_UPDATE_TURN_ON', 'B???n ph???i b???t Menu cha c???a Menu hi???n t???i');
defined('MESSAGE_ERROR_ACTIVE_PRODUCT') OR define('MESSAGE_ERROR_ACTIVE_PRODUCT', 'B???n ph???i b???t Danh m???c th???c ????n c???a th???c ????n hi???n t???i');
defined('MESSAGE_ERROR_ACTIVE_POST') OR define('MESSAGE_ERROR_ACTIVE_POST', 'B???n ph???i b???t Danh m???c b??i vi???t c???a b??i vi???t hi???n t???i');
defined('MESSAGE_ERROR_ACTIVE_CATEGORY') OR define('MESSAGE_ERROR_ACTIVE_CATEGORY', 'B???n ph???i b???t danh m???c cha c???a danh m???c hi???n t???i');

/**
 * Message check total number desk online
 */
defined('THE_DESK_IS_OVER') OR define('THE_DESK_IS_OVER', 'S??? b??n ?????t online ???? h???t');
defined('ERROR_TOTAL_NUMBER_DESK_ONLINE') OR define('ERROR_TOTAL_NUMBER_DESK_ONLINE', 'S??? b??n ?????t online c??n l???i l?? 0 b???n kh??ng th??? x??c nh???n n???a. Vui l??ng ki???m tra l???i!');
defined('ERROR_EDIT_STATUS') OR define('ERROR_EDIT_STATUS', 'Kh??ng th??? thao t??c!');
defined('ERROR_UPDATE_TOTAL_NUMBER_DESK_ONLINE') OR define('ERROR_UPDATE_TOTAL_NUMBER_DESK_ONLINE', 'L???i update s??? b??n ?????t online');
defined('ERROR_TOTAL_CONFIRM_TABLE_RESERVATIONS') OR define('ERROR_TOTAL_CONFIRM_TABLE_RESERVATIONS', 'S??? b??n ?????t online ph???i l???n h??n ho???c b???ng t???ng s??? ????n ?????t b??n ???? x??c nh???n');
defined('ERROR_GREATER_ZERO') OR define('ERROR_GREATER_ZERO', 'S??? b??n ?????t online ph???i l???n h??n 0');


/**
 * Message remove check post category-post for menu
 */

defined('MESSAGE_ERROR_REMOVE_POST') OR define('MESSAGE_ERROR_REMOVE_POST', 'B???n c?? %u menu l?? d???ng menu tr??? tr???c ti???p ?????n b??i vi???t hi???n t???i n??n b???n kh??ng th??? x??a.');
defined('MESSAGE_ERROR_REMOVE_POST_CATEGORY') OR define('MESSAGE_ERROR_REMOVE_POST_CATEGORY', 'B???n c?? %u menu ch???n danh m???c hi???n t???i l?? menu ch??nh n??n b???n kh??ng th??? x??a.');

/**
 * Message menu
 */

defined('MESSAGE_ERROR_TURN_ON_MENU_PRESENT') OR define('MESSAGE_ERROR_TURN_ON_MENU_PRESENT', 'B???n ph???i b???t Menu cha c???a Menu hi???n t???i');
defined('MESSAGE_ERROR_TURN_ON_POST_PERSENT') OR define('MESSAGE_ERROR_TURN_ON_POST_PERSENT', '---(B??i vi???t hi???n ??ang t???t ????? s??? d???ng vui l??ng b???t b??i vi???t l??n)');
defined('MESSAGE_SUCCESS_TURN_ON') OR define('MESSAGE_SUCCESS_TURN_ON', 'B???t th??nh c??ng');
defined('MESSAGE_SUCCESS_TURN_OFF') OR define('MESSAGE_SUCCESS_TURN_OFF', 'T???t th??nh c??ng');
defined('MESSAGE_ERROR_SELECT_ORIGINAL_CATEGORY') OR define('MESSAGE_ERROR_SELECT_ORIGINAL_CATEGORY', 'B???n ph???i ch???n danh m???c cho menu ch??nh');
defined('MESSAGE_ERROR_TURN_ON_POST_CATEGORY_FOR_SELECTED') OR define('MESSAGE_ERROR_TURN_ON_POST_CATEGORY_FOR_SELECTED', 'B???n ph???i b???t danh m???c b??i vi???t m?? menu ???? ch???n (t??n danh m???c l??: %s)');
defined('MESSAGE_ERROR_TURN_ON_POST_FOR_SELECTED') OR define('MESSAGE_ERROR_TURN_ON_POST_FOR_SELECTED', 'B???n ph???i b???t b??i vi???t m?? b???n ???? ch???n l??m ???????ng d???n cho menu (t??n b??i vi???t l??: %s)');
defined('MESSAGE_EDIT_ERROR_ACTIVE') OR define('MESSAGE_EDIT_ERROR_ACTIVE', 'B???n kh??ng th??? t???t danh m???c n??y');
/*=====  End of Message for Create  ======*/

/**
 * Change Language
 */
defined('MESSAGE_CHANGE_LANGUAGE_SUCCESS') OR define('MESSAGE_CHANGE_LANGUAGE_SUCCESS', 'changed');
defined('MESSAGE_CHANGE_LANGUAGE_FAIL') OR define('MESSAGE_CHANGE_LANGUAGE_FAIL', 'keep');

