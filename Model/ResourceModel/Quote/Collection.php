<?php

/**
 * @package Intelipost\Shipping
 * @copyright Copyright (c) 2021 Intelipost
 * @license https://opensource.org/licenses/OSL-3.0.php Open Software License 3.0
 */

namespace Intelipost\Shipping\Model\ResourceModel\Quote;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Intelipost\Shipping\Model\Quote as QuoteModel;
use Intelipost\Shipping\Model\ResourceModel\Quote as ResourceQuote;

class Collection extends AbstractCollection
{

    /**
     * Field name for entity id
     * @var string
     */
    protected $_idFieldName = 'entity_id';

    /**
     * Prefix for triggered events
     * @var string
     */
    protected $_eventPrefix = 'intelipost_quotes_collection';

    /**
     * Object name to access in events
     * @var string
     */
    protected $_eventObject = 'intelipost_quotes_collection';

    protected function _construct()
    {
        $this->_init(
            QuoteModel::class,
            ResourceQuote::class
        );
    }
}
