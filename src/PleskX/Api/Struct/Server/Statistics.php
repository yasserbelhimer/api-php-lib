<?php
// Copyright 1999-2014. Parallels IP Holdings GmbH. All Rights Reserved.

namespace PleskX\Api\Struct\Server;

class Statistics extends \PleskX\Api\Struct
{

    /** @var Statistics\Objects */
    public $objects;

    /** @var Statistics\Version */
    public $version;

    public function __construct($apiResponse)
    {
        $this->objects = new Statistics\Objects($apiResponse->objects);
        $this->version = new Statistics\Version($apiResponse->version);
    }
}