<?php

class RetailOps_Model_Observer
{
    /*
     * Transfer MyGiftCardPlugin amount to 'gift_cards_amount' for RetailOps Orders 
     */
    public function transferMyGiftCardValue(Varien_Event_Observer $observer) {
        file_put_contents('/tmp/magento_gift_card_test', "transferMyGiftCardValue observer " . var_export($observer, TRUE) . "\n", FILE_APPEND);
        $record = $observer->getEvent()->getRecord();
        $orderInfo = $record->getOrderInfo();
        // $orderInfo->setGiftCardsAmount($orderInfo->getMyGiftCardAmount());
        $orderInfo->setGiftCardsAmount('100');
        $record->setOrderInfo($orderInfo);
    }
}

?>