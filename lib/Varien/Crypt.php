<?php

/**
 * SPDX-FileCopyrightText: 2022-2024 The OpenMage Contributors <https://openmage.org>
 * SPDX-FileCopyrightText: 2006-2020 Magento, Inc. <https://magento.com>
 * SPDX-License-Identifier: OSL-3.0
 * @package    Varien_Crypt
 */

/**
 * Crypt factory
 *
 * @package    Varien_Crypt
 */
class Varien_Crypt
{
    /**
     * Factory method to return requested cipher logic
     *
     * @param string $method
     * @return Varien_Crypt_Abstract
     */
    public static function factory($method = 'mcrypt')
    {
        $uc = str_replace(' ', '_', ucwords(str_replace('_', ' ', $method)));
        $className = 'Varien_Crypt_' . $uc;
        return new $className();
    }
}
