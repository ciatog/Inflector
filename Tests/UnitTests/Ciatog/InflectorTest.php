<?php
namespace UnitTests\Ciatog;

use Ciatog\Inflector;

class InflectorTest extends \PHPUnit_Framework_TestCase
{
    /**
    * @test
    */
    public function humanise_replacesAllUnderscoresAndDashesWithSpacesAndpCapitalisesEachWord()
    {
        $inflector = new Inflector();

        $this->assertEquals("Humanised String Returned", $inflector->humanise("humanised_string-returned"));
    }

    /**
    * @test
    */
    public function machinise_lowercasesReplacesSpacesWithUnderscoresAndRemovesIllegalCharacters()
    {
        $inflector = new Inflector();

        $this->assertEquals("this_will_be__machinised", $inflector->machinise("@This will be %() machinised!!"));
    }

    /**
    * @test
    */
    public function dasherise_lowercasesReplacesSpacesAndUnderscoresWithDashesAndRemovesIllegalCharacters()
    {
        $inflector = new Inflector();

        $this->assertEquals("this-string-will-be--dasherised", $inflector->dasherise("This_string will be @ dasherised"));
    }
}
