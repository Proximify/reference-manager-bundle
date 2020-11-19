<?php

namespace Proximify\ReferenceManagerBundle\Tests;

use PHPUnit\Framework\TestCase;
use Proximify\UserBundle\Entity\Reference;
use Proximify\UserBundle\Entity\Collection;

class Test extends TestCase
{
    public function testEmail()
    {
        $ref = $this->getReference();
        $this->assertNull($ref->getAuthors());
        $ref->setAuthors('Phil Desjardinds');
        $this->assertSame('Phil Desjardinds', $ref->getAuthors());
    }

    public function testCollection()
    {
        $collection = $this->getCollection();
        $this->assertNull($collection->getName());
        $collection->setName('Machine Learning');
        $this->assertSame('Machine Learning', $collection->getName());
    }

    /**
     * @return Collection
     */
    protected function getCollection()
    {
        return $this->getMockForAbstractClass
            ('Proximify\ReferenceManagerBundle\Entity\Collection');
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