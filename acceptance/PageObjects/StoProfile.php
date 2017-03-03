<?php

/**
 * Created by PhpStorm.
 * User: bsc-204-033
 * Date: 17/2/17
 * Time: 12:17 PM
 */
class StoProfile
{
    public static $exitStoProfileButton = '.exit';
    public static $profileTab = '.tab_head > ul:nth-child(1) > li:nth-child(1)';
    public static $fieldStoName = ['id' => 'input-username'];
    public static $fieldStoEmail = ['name' => 'email'];
    public static $fieldStoPhone = ['name' => 'phone[]'];
    public static $fieldStoAddress = ['name' => 'address'];
    public static $fieldStoAbout = ['name' => 'about'];
    public static $fieldStoPhone2 = ['id' => 'phone1'];
    public static $stoPhone2Button = ['class' => 'addphone'];

    public static $checkboxFormComfort = 'div.minibody:nth-child(1)';
    public static $checkboxFormInfo = '.infoCheckboxes';
    public static $checkboxFormNotifySms = '.notifySms';
    public static $saveChangesStoProfile = '.profileinfo > span:nth-child(1)'; //.profileinfo

    public static $fieldsFormContacts = 'div.block:nth-child(4)'; //div.block:nth-child(4)

    // bids List
    public static $bidListItem = '#\31'; // #\31 2689
    public static $answerCount = ['class' => 'answerCount'];
    public static $answerButton = '.collapse--opened > div:nth-child(3) > button:nth-child(2)';
    public static $popupBidPayment = ['id' => 'popup'];
    public static $confirmPayButton = ['class' => 'confirm_pay'];
    public static $urlStoMessages = '/profile?tab=profile_message';
    public static $openLetter = '.svg-letter_open';
    public static $messageBlockSto = '.message-form';
    public static $fieldCostWork = ['id' => 'sumCostWork'];
    public static $fieldCostRepairParts = ['class' => 'cost-parts'];
    public static $fieldStoMessage = '.textArea';
    public static $discountCostWork = '.cost-work-discount';
    public static $discountCostParts = '.cost-parts-discount';
    public static $sendMessageButton = '.send';
    public static $messageStatus = '.message-text-status';




}