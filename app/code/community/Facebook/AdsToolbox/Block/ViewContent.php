<?php
/**
 * Copyright (c) 2016-present, Facebook, Inc.
 * All rights reserved.
 *
 * This source code is licensed under the BSD-style license found in the
 * LICENSE file in the root directory of this source tree. An additional grant
 * of patent rights can be found in the PATENTS file in the code directory.
 */

require_once 'app/Mage.php';
require_once 'common.php';

class Facebook_AdsToolbox_Block_ViewContent
  extends Mage_Core_Block_Template {

  use FacebookAdsToolboxBlockCommon;

  public function getContentIDs() {
    $products = array();
    $products[] = Mage::registry('current_product')->getId();
    return $this->arryToContentIdString($products);
  }

  public function getContentName() {
    return Mage::registry('current_product')->getName();
  }

  public function getContentCategory() {
    return Mage::registry('current_product')->getCategory() ?
      Mage::registry('current_product')->getCategory()->getName() : '';
  }

  public function getValue() {
    return Mage::registry('current_product')->getPrice();
  }
}