<?php

namespace Allotools\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AllotoolsUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}