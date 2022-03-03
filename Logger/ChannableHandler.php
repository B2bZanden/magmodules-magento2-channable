<?php
/**
 * Copyright © 2019 Magmodules.eu. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magmodules\Channable\Logger;

use Monolog\Logger;
use Magento\Framework\Logger\Handler\Base;

/**
 * @deprecated
 */
class ChannableHandler extends Base
{

    /**
     * @var int
     */
    protected $loggerType = Logger::DEBUG;
    /**
     * @var string
     */
    protected $fileName = '/var/log/channable.log';
}
