<?php
/***************************************************************************
*                                                                          *
*   (c) 2004 Vladimir V. Kalynyak, Alexey V. Vinokurov, Ilya M. Shalnev    *
*                                                                          *
* This  is  commercial  software,  only  users  who have purchased a valid *
* license  and  accept  to the terms of the  License Agreement can install *
* and use this program.                                                    *
*                                                                          *
****************************************************************************
* PLEASE READ THE FULL TEXT  OF THE SOFTWARE  LICENSE   AGREEMENT  IN  THE *
* "copyright.txt" FILE PROVIDED WITH THIS DISTRIBUTION PACKAGE.            *
****************************************************************************/

use Tygh\Registry;

if (!defined('BOOTSTRAP')) { die('Access denied'); }

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    /*if ($mode == 'update'
        && $_REQUEST['addon'] == 'epayco_adaptive'
        && (!empty($_REQUEST['ppa_settings'])
            || !empty($_REQUEST['epayco_adaptive_logo_image_data'])
            || !empty($_REQUEST['epayco_ver_image'])
        )
    ) {
        $ppa_settings = isset($_REQUEST['ppa_settings']) ? $_REQUEST['ppa_settings'] : array();
        fn_update_epayco_adaptive_settings($ppa_settings);
    }*/
}

if ($mode == 'update') {
    if ($_REQUEST['addon'] == 'epayco_adaptive') {
        $pp_adaptive_settings['main_pair'] = fn_get_image_pairs(0, 'epayco_ver_image', 'M', false, true, DESCR_SL);
        Tygh::$app['view']->assign('ppa_settings', fn_get_epayco_adaptive_settings());
        Tygh::$app['view']->assign('pp_adaptive_settings', $pp_adaptive_settings);
    }
}
