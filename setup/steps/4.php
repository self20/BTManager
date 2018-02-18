<?php
/*
*----------------------------phpMyBitTorrent V 3.0.0---------------------------*
*--- The Ultimate BitTorrent Tracker and BMS (Bittorrent Management System) ---*
*--------------   Created By Antonio Anzivino (aka DJ Echelon)   --------------*
*-------------------   And Joe Robertson (aka joeroberts)   -------------------*
*-------------               http://www.p2pmania.it               -------------*
*------------ Based on the Bit Torrent Protocol made by Bram Cohen ------------*
*-------------              http://www.bittorrent.com             -------------*
*------------------------------------------------------------------------------*
*------------------------------------------------------------------------------*
*--   This program is free software; you can redistribute it and/or modify   --*
*--   it under the terms of the GNU General Public License as published by   --*
*--   the Free Software Foundation; either version 2 of the License, or      --*
*--   (at your option) any later version.                                    --*
*--                                                                          --*
*--   This program is distributed in the hope that it will be useful,        --*
*--   but WITHOUT ANY WARRANTY; without even the implied warranty of         --*
*--   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the          --*
*--   GNU General Public License for more details.                           --*
*--                                                                          --*
*--   You should have received a copy of the GNU General Public License      --*
*--   along with this program; if not, write to the Free Software            --*
*-- Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307 USA --*
*--                                                                          --*
*------------------------------------------------------------------------------*
*------              ©2014 phpMyBitTorrent Development Team              ------*
*-----------               http://phpmybittorrent.com               -----------*
*------------------------------------------------------------------------------*
*-------------------Saturday, January 23, 2010 4:02 PM ------------------------*
*/

require_once("../include/configdata.php");
require_once("udl/database.php");


function btsqlerror($sql) { //Returns SQL Error
        global $db;
        $err = Array();
        $err = $db->sql_error();
        echo "<br />\n";
        echo "<font class=\"err\">";
        echo _btsqlerror1.$sql;
        echo "<br />";
        echo _btsqlerror2.$err["code"];
        echo "<br />";
        echo _btsqlerror3.$err["message"];
        echo "</font>";
        $db->sql_query("",END_TRANSACTION);
}

echo "<p align=\"center\"><font size=\"5\">"._step4."</font></p>\n";
echo "<p>&nbsp</p>";

$db = new sql_db($db_host, $db_user, $db_pass, $db_name, $db_persistency);

$can_proceed = true;
//$db->sql_query("",BEGIN_TRANSACTION);

echo "<p>"._checkingfiles;
foreach(explode(":","install-".$db_type.":smiles:categories") as $sqlscript) {
        if (!is_readable("sql/".$sqlscript.".sql")) {
                $can_proceed = false;
                echo "<br /><font class=\"err\">".str_replace("**file**","install-".$db_type.".sql",_step4fnotfound)."</font>";
        }
}
if ($can_proceed) echo "<font class=\ok\">OK</font>";
echo "</p>";


#Creating Tables
if ($can_proceed) {
        $fp = @fopen("sql/install-".$db_type.".sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        //echo "<p><textarea rows=\"4\" cols=\"65\">".htmlspecialchars($installscript)."</textarea></p>";
        //preg_match_all('/^(?P<query>CREATE TABLE `(?P<table>[\\w]*)`[^;]*;)$/sim', $installscript, $scripts);
        $scripts = explode(";",$installscript);
        //print_r($scripts);
        unset($installscript);
        foreach ($scripts as $script) {
                if (!preg_match('/^CREATE TABLE IF NOT EXISTS `#prefix#_([\\w]*)`[^;]*$/sim', $script, $matches)) continue;
                $script .= ";"; //Splitting string removes semicolon
                $script = str_replace("#prefix#",$db_prefix,$script);
                echo "<p>".str_replace("**table**",$matches[1],_tblcreating);
                if (!$db->sql_query($script)) {
                        $can_proceed = false;
                        btsqlerror($script);
                        break;
                } else echo "<font class=\"ok\">OK</font>";
                echo "</p>\n";
                unset($script, $matches);
        }
        unset($scripts);
}

#Inserting default smileys
if ($can_proceed) {
        $fp = @fopen("sql/smiles.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._installsmiles;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/site_settings.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_site_settings;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/arcade_settings.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_arcade_settings;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/arcade_categories.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_arcade_categories;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/arcade_games.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_arcade_games;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/attachments_config.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_attachments_config;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/avatar_config.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_avatar_config;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/avp.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_avp;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/bbcode.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_bbcode;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/bonus.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_bonus;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/bonus_points.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_bonus_points;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/cache_con.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_cache_con;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/categories.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._installcategories;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/extension_groups.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_extension_groups;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/extensions.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_extensions;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/forum_config.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_forum_config;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/icons.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_icons;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/img_bucket.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_img_bucket;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/level_privlages.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_level_privlages;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/level_settings.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_level_settings;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/levels.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_levels;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}
if ($can_proceed) {
        $fp = @fopen("sql/paypal.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_paypal;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}

if ($can_proceed) {
        $fp = @fopen("sql/ranks.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_ranks;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}

if ($can_proceed) {
        $fp = @fopen("sql/ratiowarn_config.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_ratiowarn_config;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}

if ($can_proceed) {
        $fp = @fopen("sql/search_cloud.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_search_cloud;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}

if ($can_proceed) {
        $fp = @fopen("sql/shout_config.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_shout_config;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}

if ($can_proceed) {
        $fp = @fopen("sql/time_offset.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_time_offset;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}

if ($can_proceed) {
        $fp = @fopen("sql/userautodel.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_userautodel;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
} 

if ($can_proceed) {
        $fp = @fopen("sql/acl_options.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_acl_options;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}

if ($can_proceed) {
        $fp = @fopen("sql/acl_roles.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_acl_roles;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
} 

if ($can_proceed) {
        $fp = @fopen("sql/acl_roles_data.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_acl_roles_data;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
} 

if ($can_proceed) {
        $fp = @fopen("sql/acl_groups.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_acl_groups;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
}

if ($can_proceed) {
        $fp = @fopen("sql/modules.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_modules;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
} 

if ($can_proceed) {
        $fp = @fopen("sql/report_reasons.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_report_reasons;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
} 

if ($can_proceed) {
        $fp = @fopen("sql/countries.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_countries;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
		$db->sql_query('UPDATE `' . $db_prefix . '_countries` SET `id`=\'0\' WHERE `id` = \'100\';');
        unset($installscript);
} 

if ($can_proceed) {
        $fp = @fopen("sql/hit_run.sql","r");
        $installscript = "";
        while (!feof($fp)) $installscript .= @fgets($fp,1000);
        @fclose($fp);
        unset($fp);
        $installscript = str_replace("#prefix#",$db_prefix,$installscript);
        echo "<p>"._sql_hit_run;
        if (!$db->sql_query($installscript)) {
                $can_proceed = false;
                btsqlerror(substr($installscript,0,100)."..."); 
        } else echo "<font class=\"ok\">OK</font>";
        echo "</p>\n";
        unset($installscript);
} 
		$db->sql_query('UPDATE `' . $db_prefix . '_countries` SET `id`=\'0\' WHERE `id` = \'100\';');
        $sql = "INSERT INTO ".$db_prefix."_users (username, clean_username, password, email, active, act_key, level, can_do, user_rank, user_type, regdate) VALUES('GUEST','guest','".md5('1k2g5h1j5k1h5g1f5hkj')."','".addslashes('guest@nowhere.com')."', 1,'".base64_encode(microtime())."', 'user', '4', '0', '0', NOW());";
		$db->sql_query($sql);
		$db->sql_query('UPDATE `' . $db_prefix . '_users` SET `id`=\'0\';');
if ($can_proceed) {
        echo "<p>"._step4complete."</p>";
        echo "<p><input type=\"submit\" value=\""._nextstep."\" /></p>\n";
        echo "<input type=\"hidden\" name=\"step\" value=\"5\" />\n";
} else {
        echo "<p>"._step4failed."</p>";
}

//$db->sql_query("",END_TRANSACTION);
$db->sql_close();

?>