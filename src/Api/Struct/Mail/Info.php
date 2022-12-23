<?php
// Copyright 1999-2021. Plesk International GmbH.

namespace PleskX\Api\Struct\Mail;

class Info extends \PleskX\Api\Struct
{
    /** @var int */
    public $id;

    /** @var string */
    public $name;

    public function __construct($apiResponse,$fields= [
            'id',
            'name',
        ])
    {
        $this->_initScalarProperties($apiResponse, $fields);
    }
}
