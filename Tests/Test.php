<?php

namespace Proximify\ReferenceManagerBundle\Tests;

use PHPUnit\Framework\TestCase;
use Proximify\UserBundle\Entity\Reference;

class Test extends TestCase
{
    public function testEmail()
    {
        $ref = $this->getReference();
        $this->assertNull($ref->getAuthors());
        $ref->setAuthors('Phil Desjardinds');
        $this->assertSame('Phil Desjardinds', $ref->getAuthors());
    }

    /**
     * @return Reference
     */
    protected function getReference()
    {
        return $this->getMockForAbstractClass
            ('Proximify\ReferenceManagerBundle\Entity\Reference');
    }
}