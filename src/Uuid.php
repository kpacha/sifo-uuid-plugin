<?php

namespace Sifo\Uuid;

use Rhumsaa\Uuid\Uuid as BaseUuid;

class Uuid
{

    const NAMESPACE_DNS = BaseUuid::NAMESPACE_DNS;
    const NAMESPACE_URL = BaseUuid::NAMESPACE_URL;
    const NAMESPACE_OID = BaseUuid::NAMESPACE_OID;
    const NAMESPACE_X500 = BaseUuid::NAMESPACE_X500;
    const NIL = BaseUuid::NIL;

    public static function uuid1($node = null, $clockSeq = null)
    {
        return BaseUuid::uuid1($node, $clockSeq);
    }

    public static function uuid3($ns, $name)
    {
        return BaseUuid::uuid3($ns, $name);
    }

    public static function uuid4()
    {
        return BaseUuid::uuid4();
    }

    public static function uuid5($ns, $name)
    {
        return BaseUuid::uuid5($ns, $name);
    }

}
