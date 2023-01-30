<?php

/**
 * @package Intelipost\Shipping
 * @copyright Copyright (c) 2021 Intelipost
 * @license https://opensource.org/licenses/OSL-3.0.php Open Software License 3.0
 */

declare(strict_types=1);

namespace Intelipost\Shipping\Api\Data;
interface LabelSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Token list.
     * @return \Intelipost\Shipping\Api\Data\LabelInterface[]
     */
    public function getItems();

    /**
     * Set entity_id list.
     * @param \Intelipost\Shipping\Api\Data\LabelInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

