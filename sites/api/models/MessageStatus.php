<?php

namespace Custom\Models;

use Fogito\Lib\Auth;
use Fogito\Lib\Lang;
use Lib\Permission;
use Models\ModelTrait;

class MessageStatus extends \Fogito\Db\ModelManager
{
    use ModelTrait;

    public static function getSource()
    {
        return "message_status";
    }
}
