<?php

/**
**********************
** BTManager v3.0.1 **
**********************
** http://www.btmanager.org/
** https://github.com/blackheart1/BTManager
** http://demo.btmanager.org/index.php
** Licence Info: GPL
** Copyright (C) 2018
** Formerly Known As phpMyBitTorrent
** Created By Antonio Anzivino (aka DJ Echelon)
** And Joe Robertson (aka joeroberts)
** Project Leaders: Black_heart, Thor.
** File acp_casino/english.php 2018-03-24 20:44:00 Thor
**
** CHANGES
**
** 2018-02-21 - Added New Masthead
** 2018-02-21 - Added New !defined('IN_PMBT')
** 2018-02-21 - Fixed Spelling
** 2018-03-24 - Amended New !defined('IN_PMBT')
** 2018-03-24 - Amended the Wording of some Sentences
**/

if (!defined('IN_PMBT'))
{
    include_once './../../security.php';
    die ("You can't access this file directly");
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
    'MAIN_TEXT'              => 'Casino Configuration Settings',
    'MAIN_INTRO_EXP'         => 'Setup the Casino Basic Configuration so that you can Limit Users that can Access Making Bets.',

    'CASINO_CONFIG'          => 'Casino Settings',
    '_admpenable'            => "Enable the Casino",

    '_admpenableexplain'     => "Turning ON the Casino will Enable your Users to Play Betting Games, that they can use some of there Uploaded Credit on.<br />This can be good for some Users and very bad for others.  But it's' all in fun.",

    '_admpratio_mini'        => "Minimum Ratio",

    '_admpratio_miniexplain' => "Set the Minimum Ratio that a User must have in Order to Access the Casino.<br />This Setting is in Percentages 2.00, 1.50, 1.00, .95, .90",

    '_admpmaxtrys'           => "Casino Maximum Tries",
    '_admpmaxtrysexplain'    => "How many times can a User Play before they have to Wait 5 Hours to Play again?",

    '_admpwin_amount_on_number' => "Winning Amount in Bet on Number Game",

    '_admpwin_amount_on_numberexplain' => "How much does the Player Win in the Bet on Number Game eg.<br />Bet 300, <br />Winning Amount = 3<br />300*3<br />900 Won.",

    '_admpwin_amount'              => "Winning Amount in Bet on a Colour",

    '_admpwin_amountexplain'       => "How much does the Player Win in the Bet on Colour Game eg.<br />Bet 300, <br />Winning Amount = 3<br />300*3<br />900 Won.",

    '_admpmaxusrbet'               => "Amount of Bets Allowed Per Person",
    '_admpmaxusrbetexplain'        => "How many Open Bets is a User Allowed to have for P2P Games?",
    '_admpmaxtotbet'               => "Amount of Total Open Bets Allowed",
    '_admpmaxtotbetexplain'        => "How many Open Bets are Allowed Total on P2P Games?",
    '_admpcheat_value'             => "Casino Cheat Value",
    '_admpcheat_valueexplain'      => "Higher Value -> Less Wins",
    '_admpcheat_value_max'         => "Casino Cheat Value Maximum",

    '_admpcheat_value_maxexplain'  => "The Cheat Value = Cheat Value Maximum -->> I hope you know what I mean.  PS: must be Higher than Cheat Value.",

    '_admpcheat_breakpoint'        => "Casino Cheat Breakpoint",
    '_admpcheat_breakpointexplain' => "Very Important Value -> If (Win MB > Maximum Download Global/Cheat Breakpoint)",
    '_admpcheat_ratio_user'        => "Casino Cheat Ratio User",

    '_admpcheat_ratio_userexplain' => "If Casino Ratio User > Cheat Ratio User -> Cheat Value = Random(Cheat Value, Cheat Value Maximum)",

    '_admpcheat_ratio_global'        => "Casino Cheat Ratio Global",
    '_admpcheat_ratio_globalexplain' => "(same as User but just Global)",
    '_admpclass_allowed'             => "Access Level",
    '_admpclass_allowedexplain'      => "What Group is Allowed to Play in the Casino?",

    'YES_NO_OPTION'     => array('1'=> 'Yes', '0' => 'No'),

    'ERR_RATIO'         => 'The Number you Entered for Minimum Ratio is NOT Numeric.  Please Go Back and Enter a Numeric Value.',

    'ERR_MATRY'         => 'The Number you Entered for Casino Maximum Tries is NOT Numeric.  Please Go Back and Enter a Numeric Value.',

    'ERR_WIN_NUMBER'    => 'The Number you Entered for the Winning Amount in Bet on Number Game is NOT Numeric.  Please Go Back and Enter a Numeric Value.',

    'ERR_WIN_COLOR'     => 'The Number you Entered for the Winning Amount in Bet on a Colour is NOT Numeric.  Please Go Back and Enter a Numeric Value.',

    'ERR_M_USER_BETS'   => 'The Number you Entered for Amount of Bets to Allow Per Person is NOT Numeric.  Please Go Back and Enter a Numeric Value.',

    'ERR_M_TOT_BETS'    => 'The Number you Entered for Amount of Total Open Bets Allowed is NOT Numeric.  Please Go Back and Enter a Numeric Value.',

    'ERR_CHEAT_VAL'     => 'The Number you Entered for Casino Cheat Value is NOT Numeric.  Please Go Back and Enter a Numeric Value.',

    'ERR_CHEAT_VAL_MAX' => 'The Number you Entered for Casino Cheat Value Maximum is NOT Numeric.  Please Go Back and Enter a Numeric Value.',

    'ERR_CHEAT_BREAK'   => 'The Number you Entered for Casino Cheat Breakpoint is NOT Numeric.  Please Go Back and Enter a Numeric Value.',

    'ERR_CHEAT_RATIO'   => 'The Number you Entered for Casino Cheat Ratio User is NOT Numeric.  Please Go Back and Enter a numeric number.',

    'ERR_CHEAT_RATIO_GLOBAL' => 'The Number you Entered for Casino Cheat Ratio Global is NOT Numeric.  Please Go Back and Enter a Numeric Value.',

    'ERR_BAD_LEVEL'  => 'One or more of the Groups you Entered is NOT Valid.  Please Go Back and Try Again.',
    'CONFIG_NOT_SET' => 'A Error Occurred while Processing the New Settings.  Please Read Below!',
));

?>