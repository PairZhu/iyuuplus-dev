<?php

namespace Iyuu\SiteManager\Driver;

use Iyuu\SiteManager\Contracts\Processor;
use Iyuu\SiteManager\Contracts\ProcessorXml;
use Iyuu\SiteManager\Frameworks\NexusPhp\HasRss;
use Iyuu\SiteManager\BaseDriver;

/**
 * njtupt
 */
class DriverNjtupt extends BaseDriver implements Processor, ProcessorXml
{
    use HasRss;
    /**
     * 站点名称
     */
    public const SITE_NAME = 'njtupt';
}
