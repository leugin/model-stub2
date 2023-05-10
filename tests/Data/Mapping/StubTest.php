<?php
declare(strict_types=1);
namespace Leugin\ModelStub2\Tests\Data\Mapping;



use Leugin\ModelStub2\Shared\Data\Mapping\Stub;
use Leugin\ModelStub2\Shared\Data\Values\StubProperty;
use Leugin\ModelStub2\Shared\Data\Values\StubPropertyType;

class StubTest extends \PHPUnit\Framework\TestCase
{

    /**
     * @test
     */
    public function itCanTestExists()
    {
        $newSTup = new Stub("Tests", "Leugin\ModelStub2\Tests\Data\Mapping");

        $newSTup->setStubPath(__DIR__ . "/../../../src/Shared/Data/Stubs/Stub.stub");

        $newSTup->addProperty(new StubProperty("name", StubPropertyType::string()));

        $rs = $newSTup->generate();

        foreach ($newSTup->getProperties() as $property) {
            $this->assertStringContainsString($property->getName(), $rs);
        }

    }
}