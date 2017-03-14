<?php

/**
 *  playHookah
 *  Copyright (C) 2017 Daniel Welsch
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package playHookah
 * @author Daniel Welsch <info@playHookah.de>
 * @copyright 2017 Daniel Welsch <info@playHookah.de>
 * @license http://www.gnu.org/licenses/gpl.html GNU GPLv3 License
 * @version 0.1 (2017-03-14)
 * @link <playHookah.de>
 */

require(ROOT_PATH.'/includes/libs/facebook/facebook.php');
class FacebookAuth extends Facebook {
        function __construct()
        {      
                if($this->isActiveMode())
                {
                        parent::__construct(array(
                                'appId'  => $GLOBALS['CONF']['fb_apikey'],
                                'secret' => $GLOBALS['CONF']['fb_skey'],
                                'cookie' => true,
                        ));
                }
        }
       
        function isActiveMode() {
                return $GLOBALS['CONF']['fb_on'] == 1;
        }
       
        function isVaild() {
                if($this->getUser() != 0)
                {
                        return $this->getUser();
                }
               
                if(!empty($_GET['error_reason']))
                {
                        HTTP::redirectTo('index.php');
                }
               
                HTTP::sendHeader('Location', $this->getLoginUrl(array(
                        'scope' => 'publish_stream,publish_actions,user_games_activity',
                        'redirect_uri' => HTTP_PATH.'index.php?page=externalAuth&method=facebook'
                )));
                exit;
        }
       
        function getAccount()
        {
                return $this->getUser();
        }
       
        function register()
        {
                $uid    = $this->getAccount();
               
                $me = $this->api('/me');
                $ValidReg       = $GLOBALS['DATABASE']->getFirstCell("SELECT cle FROM ".USERS_VALID." WHERE universe = ".$UNI." AND email = '".$GLOBALS['DATABASE']->sql_escape($me['email'])."';");
                if(!empty($ValidReg))
                        HTTP::redirectTo("index.php?uni=".$UNI."&page=reg&action=valid&clef=".$ValidReg);
                                                       
                $GLOBALS['DATABASE']->query("INSERT INTO ".USERS_AUTH." SET
                id = (SELECT id FROM ".USERS." WHERE email = '".$GLOBALS['DATABASE']->sql_escape($me['email'])."' OR email_2 = '".$GLOBALS['DATABASE']->sql_escape($me['email'])."'),
                account = ".$uid.",
                mode = 'facebook';");
        }
       
        function getLoginData()
        {
                global $UNI;
       
                $uid    = $this->getAccount();
               
                return $GLOBALS['DATABASE']->getFirstRow("SELECT
                user.id, id_planet
                FROM ".USERS_AUTH." auth
                INNER JOIN ".USERS." user ON auth.id = user.id AND user.universe = ".$UNI."
                WHERE auth.account = ".$uid." AND mode = 'facebook';");
        }
       
        function getAccountData()
        {
                $data   = $this->api('/me', array('access_token' => $this->getAccessToken()));
               
                return array(
                        'id'            => $data['id'],
                        'name'          => $data['name'],
                        'locale'        => $data['locale']
                );
        }
}

