<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Magento\MediaContentApi\Api;

use Magento\MediaGalleryApi\Api\Data\AssetInterface;

/**
 * Parse the content string for references to media assets and return the list of identified media assets
 * @api
 */
interface ExtractAssetsFromContentInterface
{
    /**
     * Parse the content string for references to media assets and return the list of identified media assets
     *
     * @param string $content
     * @return AssetInterface[]
     */
    public function execute(string $content): array;
}
