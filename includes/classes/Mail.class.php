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

class Mail
{	
	static public function send($mailTarget, $mailTargetName, $mailSubject, $mailContent)
	{		
		$mail	= self::getMailObject();
		
		$mailFromAdress	= Config::get('smtp_sendmail');
		$mailFromName	= Config::get('game_name');
			 
        $mail->CharSet          = 'UTF-8';              
        $mail->Subject          = $mailSubject;
        $mail->Body             = $mailContent;
        $mail->SetFrom($mailFromAdress, $mailFromName);
        $mail->AddAddress($mailTarget, $mailTargetName);
        $mail->Send(); 
	}

	static public function multiSend($mailTargets, $mailSubject, $mailContent = NULL)
	{
		$mail	= self::getMailObject();
		
		$mailFromAdress	= Config::get('smtp_sendmail');
		$mailFromName	= Config::get('game_name');
			 
        $mail->CharSet          = 'UTF-8';         
        $mail->SetFrom($mailFromAdress, $mailFromName);     
        $mail->Subject          = $mailSubject;
			 
		foreach($mailTargets as $address => $data)
		{
			$content = isset($data['body']) ? $data['body'] : $mailContent;
			
			$mail->AddAddress($address, $data['username']);
			$mail->MsgHTML($content);
			$mail->Send(); 
			$mail->ClearAddresses();
		}
	}

	static private function getMailObject()
	{
        require 'includes/libs/phpmailer/class.phpmailer.php';
        $mail                   = new PHPMailer(true);
		$mail->PluginDir		= 'includes/libs/phpmailer/';
		
        if(Config::get('mail_use') == 2) {
			$mail->IsSMTP();  
			$mail->SMTPSecure       = Config::get('smtp_ssl');                                            
			$mail->Host             = Config::get('smtp_host');
			$mail->Port             = Config::get('smtp_port');
			
			if(Config::get('smtp_user') != '')
			{
				$mail->SMTPAuth         = true; 
				$mail->Username         = Config::get('smtp_user');
				$mail->Password         = Config::get('smtp_pass');
			}
        } elseif(Config::get('mail_use') == 0) {
			$mail->IsMail();
        } else {
			throw new Exception("Sendmail is deprecated, use SMTP instaed!");
		}
		
		return $mail;
	}
}