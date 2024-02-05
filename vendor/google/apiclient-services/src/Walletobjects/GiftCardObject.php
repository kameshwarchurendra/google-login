<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Walletobjects;

class GiftCardObject extends \Google\Collection
{
  protected $collection_key = 'textModulesData';
  /**
   * @var AppLinkData
   */
  public $appLinkData;
  protected $appLinkDataType = AppLinkData::class;
  protected $appLinkDataDataType = '';
  /**
   * @var Money
   */
  public $balance;
  protected $balanceType = Money::class;
  protected $balanceDataType = '';
  /**
   * @var DateTime
   */
  public $balanceUpdateTime;
  protected $balanceUpdateTimeType = DateTime::class;
  protected $balanceUpdateTimeDataType = '';
  /**
   * @var Barcode
   */
  public $barcode;
  protected $barcodeType = Barcode::class;
  protected $barcodeDataType = '';
  /**
   * @var string
   */
  public $cardNumber;
  /**
   * @var string
   */
  public $classId;
  /**
   * @var GiftCardClass
   */
  public $classReference;
  protected $classReferenceType = GiftCardClass::class;
  protected $classReferenceDataType = '';
  /**
   * @var bool
   */
  public $disableExpirationNotification;
  /**
   * @var string
   */
  public $eventNumber;
  /**
   * @var GroupingInfo
   */
  public $groupingInfo;
  protected $groupingInfoType = GroupingInfo::class;
  protected $groupingInfoDataType = '';
  /**
   * @var bool
   */
  public $hasLinkedDevice;
  /**
   * @var bool
   */
  public $hasUsers;
  /**
   * @var Image
   */
  public $heroImage;
  protected $heroImageType = Image::class;
  protected $heroImageDataType = '';
  /**
   * @var string
   */
  public $id;
  /**
   * @var ImageModuleData[]
   */
  public $imageModulesData;
  protected $imageModulesDataType = ImageModuleData::class;
  protected $imageModulesDataDataType = 'array';
  /**
   * @var InfoModuleData
   */
  public $infoModuleData;
  protected $infoModuleDataType = InfoModuleData::class;
  protected $infoModuleDataDataType = '';
  /**
   * @var string
   */
  public $kind;
  /**
   * @var LinksModuleData
   */
  public $linksModuleData;
  protected $linksModuleDataType = LinksModuleData::class;
  protected $linksModuleDataDataType = '';
  /**
   * @var LatLongPoint[]
   */
  public $locations;
  protected $locationsType = LatLongPoint::class;
  protected $locationsDataType = 'array';
  /**
   * @var Message[]
   */
  public $messages;
  protected $messagesType = Message::class;
  protected $messagesDataType = 'array';
  /**
   * @var PassConstraints
   */
  public $passConstraints;
  protected $passConstraintsType = PassConstraints::class;
  protected $passConstraintsDataType = '';
  /**
   * @var string
   */
  public $pin;
  /**
   * @var RotatingBarcode
   */
  public $rotatingBarcode;
  protected $rotatingBarcodeType = RotatingBarcode::class;
  protected $rotatingBarcodeDataType = '';
  /**
   * @var string
   */
  public $smartTapRedemptionValue;
  /**
   * @var string
   */
  public $state;
  /**
   * @var TextModuleData[]
   */
  public $textModulesData;
  protected $textModulesDataType = TextModuleData::class;
  protected $textModulesDataDataType = 'array';
  /**
   * @var TimeInterval
   */
  public $validTimeInterval;
  protected $validTimeIntervalType = TimeInterval::class;
  protected $validTimeIntervalDataType = '';
  /**
   * @var string
   */
  public $version;

  /**
   * @param AppLinkData
   */
  public function setAppLinkData(AppLinkData $appLinkData)
  {
    $this->appLinkData = $appLinkData;
  }
  /**
   * @return AppLinkData
   */
  public function getAppLinkData()
  {
    return $this->appLinkData;
  }
  /**
   * @param Money
   */
  public function setBalance(Money $balance)
  {
    $this->balance = $balance;
  }
  /**
   * @return Money
   */
  public function getBalance()
  {
    return $this->balance;
  }
  /**
   * @param DateTime
   */
  public function setBalanceUpdateTime(DateTime $balanceUpdateTime)
  {
    $this->balanceUpdateTime = $balanceUpdateTime;
  }
  /**
   * @return DateTime
   */
  public function getBalanceUpdateTime()
  {
    return $this->balanceUpdateTime;
  }
  /**
   * @param Barcode
   */
  public function setBarcode(Barcode $barcode)
  {
    $this->barcode = $barcode;
  }
  /**
   * @return Barcode
   */
  public function getBarcode()
  {
    return $this->barcode;
  }
  /**
   * @param string
   */
  public function setCardNumber($cardNumber)
  {
    $this->cardNumber = $cardNumber;
  }
  /**
   * @return string
   */
  public function getCardNumber()
  {
    return $this->cardNumber;
  }
  /**
   * @param string
   */
  public function setClassId($classId)
  {
    $this->classId = $classId;
  }
  /**
   * @return string
   */
  public function getClassId()
  {
    return $this->classId;
  }
  /**
   * @param GiftCardClass
   */
  public function setClassReference(GiftCardClass $classReference)
  {
    $this->classReference = $classReference;
  }
  /**
   * @return GiftCardClass
   */
  public function getClassReference()
  {
    return $this->classReference;
  }
  /**
   * @param bool
   */
  public function setDisableExpirationNotification($disableExpirationNotification)
  {
    $this->disableExpirationNotification = $disableExpirationNotification;
  }
  /**
   * @return bool
   */
  public function getDisableExpirationNotification()
  {
    return $this->disableExpirationNotification;
  }
  /**
   * @param string
   */
  public function setEventNumber($eventNumber)
  {
    $this->eventNumber = $eventNumber;
  }
  /**
   * @return string
   */
  public function getEventNumber()
  {
    return $this->eventNumber;
  }
  /**
   * @param GroupingInfo
   */
  public function setGroupingInfo(GroupingInfo $groupingInfo)
  {
    $this->groupingInfo = $groupingInfo;
  }
  /**
   * @return GroupingInfo
   */
  public function getGroupingInfo()
  {
    return $this->groupingInfo;
  }
  /**
   * @param bool
   */
  public function setHasLinkedDevice($hasLinkedDevice)
  {
    $this->hasLinkedDevice = $hasLinkedDevice;
  }
  /**
   * @return bool
   */
  public function getHasLinkedDevice()
  {
    return $this->hasLinkedDevice;
  }
  /**
   * @param bool
   */
  public function setHasUsers($hasUsers)
  {
    $this->hasUsers = $hasUsers;
  }
  /**
   * @return bool
   */
  public function getHasUsers()
  {
    return $this->hasUsers;
  }
  /**
   * @param Image
   */
  public function setHeroImage(Image $heroImage)
  {
    $this->heroImage = $heroImage;
  }
  /**
   * @return Image
   */
  public function getHeroImage()
  {
    return $this->heroImage;
  }
  /**
   * @param string
   */
  public function setId($id)
  {
    $this->id = $id;
  }
  /**
   * @return string
   */
  public function getId()
  {
    return $this->id;
  }
  /**
   * @param ImageModuleData[]
   */
  public function setImageModulesData($imageModulesData)
  {
    $this->imageModulesData = $imageModulesData;
  }
  /**
   * @return ImageModuleData[]
   */
  public function getImageModulesData()
  {
    return $this->imageModulesData;
  }
  /**
   * @param InfoModuleData
   */
  public function setInfoModuleData(InfoModuleData $infoModuleData)
  {
    $this->infoModuleData = $infoModuleData;
  }
  /**
   * @return InfoModuleData
   */
  public function getInfoModuleData()
  {
    return $this->infoModuleData;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * @param LinksModuleData
   */
  public function setLinksModuleData(LinksModuleData $linksModuleData)
  {
    $this->linksModuleData = $linksModuleData;
  }
  /**
   * @return LinksModuleData
   */
  public function getLinksModuleData()
  {
    return $this->linksModuleData;
  }
  /**
   * @param LatLongPoint[]
   */
  public function setLocations($locations)
  {
    $this->locations = $locations;
  }
  /**
   * @return LatLongPoint[]
   */
  public function getLocations()
  {
    return $this->locations;
  }
  /**
   * @param Message[]
   */
  public function setMessages($messages)
  {
    $this->messages = $messages;
  }
  /**
   * @return Message[]
   */
  public function getMessages()
  {
    return $this->messages;
  }
  /**
   * @param PassConstraints
   */
  public function setPassConstraints(PassConstraints $passConstraints)
  {
    $this->passConstraints = $passConstraints;
  }
  /**
   * @return PassConstraints
   */
  public function getPassConstraints()
  {
    return $this->passConstraints;
  }
  /**
   * @param string
   */
  public function setPin($pin)
  {
    $this->pin = $pin;
  }
  /**
   * @return string
   */
  public function getPin()
  {
    return $this->pin;
  }
  /**
   * @param RotatingBarcode
   */
  public function setRotatingBarcode(RotatingBarcode $rotatingBarcode)
  {
    $this->rotatingBarcode = $rotatingBarcode;
  }
  /**
   * @return RotatingBarcode
   */
  public function getRotatingBarcode()
  {
    return $this->rotatingBarcode;
  }
  /**
   * @param string
   */
  public function setSmartTapRedemptionValue($smartTapRedemptionValue)
  {
    $this->smartTapRedemptionValue = $smartTapRedemptionValue;
  }
  /**
   * @return string
   */
  public function getSmartTapRedemptionValue()
  {
    return $this->smartTapRedemptionValue;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
  /**
   * @param TextModuleData[]
   */
  public function setTextModulesData($textModulesData)
  {
    $this->textModulesData = $textModulesData;
  }
  /**
   * @return TextModuleData[]
   */
  public function getTextModulesData()
  {
    return $this->textModulesData;
  }
  /**
   * @param TimeInterval
   */
  public function setValidTimeInterval(TimeInterval $validTimeInterval)
  {
    $this->validTimeInterval = $validTimeInterval;
  }
  /**
   * @return TimeInterval
   */
  public function getValidTimeInterval()
  {
    return $this->validTimeInterval;
  }
  /**
   * @param string
   */
  public function setVersion($version)
  {
    $this->version = $version;
  }
  /**
   * @return string
   */
  public function getVersion()
  {
    return $this->version;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GiftCardObject::class, 'Google_Service_Walletobjects_GiftCardObject');
