<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/**
 * Advanced OpenSales, Advanced, robust set of sales modules.
 * @package Advanced OpenSales for SugarCRM
 * @copyright SalesAgility Ltd http://www.salesagility.com
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU AFFERO GENERAL PUBLIC LICENSE as published by
 * the Free Software Foundation; either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU AFFERO GENERAL PUBLIC LICENSE
 * along with this program; if not, see http://www.gnu.org/licenses
 * or write to the Free Software Foundation,Inc., 51 Franklin Street,
 * Fifth Floor, Boston, MA 02110-1301  USA
 *
 * @author SalesAgility <info@salesagility.com>
 */

require_once('include/MVC/Controller/SugarController.php');
require_once('include/SugarDateTime.php');
require_once('custom/include/Immocaster/Sdk.php');

class Re_PublicationsController extends SugarController
{

  public function action_push()
  {
    global $timedate;

   if(!isset($timedate) || empty($timedate))
   {
       $timedate = new TimeDate();
   }
  /**
   * Verbindung zum Service von ImmobilienScout24 aufbauen.
   * Die Daten (Key und Secret) erhält man auf
   * http://developer.immobilienscout24.de.
   */
  $sImmobilienScout24Key    = 'IW24_finalKey'; //'IW24 testKey';
  $sImmobilienScout24Secret = 'fsbCm0tPnsQ0gPte'; //'2jEgatscYwtqRJZ2';
  $username 								= "is24_tuv_109864573_44643@test.com";
  $oImmocaster              = Immocaster_Sdk::getInstance('is24',$sImmobilienScout24Key,$sImmobilienScout24Secret);

  $aDatabase = array(
    'mysql',
    'mariadb',
    'bn_suitecrm',
    '',
    'bitnami_suitecrm'
  );
  //echo "hallo".$this->bean->is24_id;
  $oImmocaster->setDataStorage($aDatabase);

  $estate = $this->bean->get_linked_beans('re_publications_re_objects')[0];
  //print_r($estate[0]);
  //die();
  $aParameter = array(
  	'username' => $username,
  	'service' => 'immobilienscout',
  	'exposeid' => $this->bean->targetid,
  	'estate' => array(
  	'xml' => '<?xml version="1.0" encoding="utf-8"?>
  <realestates:apartmentRent xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:realestates="http://rest.immobilienscout24.de/schema/offer/realestates/1.0">
  <externalId>'.$this->bean->id.'</externalId>
  	<title>'.$estate->name.'</title>
    <address>

      <street>'.$estate->adresse.'</street>
      <houseNumber>'.$estate-> adresse_street_number.'</houseNumber>
      <postcode>'.$estate->adresse_postalcode.'</postcode>
      <city>'.$estate->adresse_city.'</city>
    </address>
    <descriptionNote>'.$estate->description.'</descriptionNote>
    <furnishingNote>'.$estate->description_furnishing.'</furnishingNote>

    <showAddress>false</showAddress>
    <apartmentType>'.strtoupper(str_replace("flat_","",$estate->objectsubtype)).'</apartmentType>
    <constructionYear>2002</constructionYear>
    <freeFrom>'.$estate->available_from.'</freeFrom>
    <heatingType>'.$estate->heating.'</heatingType>
    <firingTypes>
      <firingType>'.$estate->firing.'</firingType>
    </firingTypes>
    <baseRent>'.$estate->rent_cold.'</baseRent>
    <livingSpace>'.$estate->floor_space.'</livingSpace>
    <numberOfRooms>'.$estate->rooms.'</numberOfRooms>
    <courtage>
      <hasCourtage>YES</hasCourtage>
      <courtage>117,14%</courtage>
    </courtage>
  </realestates:apartmentRent>'
  ));
  //print_r($oImmocaster->exportObject($aParameter)); // Objekt exportieren
//  print_r($oImmocaster->changeObject($aParameter));
//print_r($oImmocaster->exportObject($aParameter));
$res;
    //echo if object has an targetId it was already exported and has to update
    if (!isset($this->bean->targetid) || empty($this->bean->targetid)) { $res = $oImmocaster->exportObject($aParameter);}
    else { $res = $oImmocaster->changeObject($aParameter);}
    //echo $res;

    $message = $res;
    $response = simplexml_load_string($res);
    $state = "deactive";

    $id = $this->bean->targetid;

    if (isset($response->message->id) && !empty($response->message->id))
    {

      $state = "active";
      $id = $response->message->id;
      $message = $response->message->message;
      $images = $estate->get_linked_beans(
        "re_objects_re_images","re_objects_re_images"
      );
      $aParameter = array('file' => 'upload/'.$images[0]->id.".jpg",
      'username' => $username,
      'estateid' => $id ,
      'externalId' => "1",
      "externalCheckSum" => "1",
      'type' => 'Picture');
      //$attachments = $oImmocaster->exportObjectAttachment($aParameter);

      //export images
      //foreach ($images as $image)

    //  $res = $oImmocaster->exportObjectAttachment($aParameter);
      //echo $externalCheckSum; die();
    }
    $this->bean->targetid = $id;
    $this->bean->lastpushed = $timedate->asUser($timedate->getNow(), $current_user);//new SugarDateTime();
    $this->bean->lastmessage = $message;
    //$this->bean->is24_state = $state;
    $this->bean->save();


    SugarApplication::redirect('index.php?module=re_objects&action=DetailView&record='.$estate->id);
  }
}
