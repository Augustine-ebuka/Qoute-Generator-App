<?php
include_once ("smsactivateApi.php");//Inclusion of a class in a project
$sms = new SMSActivate($API_KEY);//Create class instance SMSActivate


$freeSlots = $sms->getNumbersStatus(0, 'tele2');//Get the number of available numbers for the country of Russia and the tele2 operator
echo "Номеров Вконтакте: " . $freeSlots['vk']."\n";//Show for Vk

echo "Номеров Whatsapp: " . $freeSlots['wa']."\n";//Show for whatsapp

