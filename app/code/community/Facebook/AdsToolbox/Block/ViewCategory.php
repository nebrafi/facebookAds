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

class Facebook_AdsToolbox_Block_ViewCategory
  extends Mage_Core_Block_Template {

  use FacebookAdsToolboxBlockCommon;

  public function getCategory() {
    return Mage::getSingleton('catalog/layer')->getCurrentCategory()->getName();
  }
}
