<?php
namespace ACME\Movierental\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author John Simple 
 */
class MediumTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ACME\Movierental\Domain\Model\Medium
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \ACME\Movierental\Domain\Model\Medium();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getIsRentedReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getIsRented()
        );
    }

    /**
     * @test
     */
    public function setIsRentedForBoolSetsIsRented()
    {
        $this->subject->setIsRented(true);

        self::assertAttributeEquals(
            true,
            'isRented',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRentedOnReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getRentedOn()
        );
    }

    /**
     * @test
     */
    public function setRentedOnForDateTimeSetsRentedOn()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setRentedOn($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'rentedOn',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRentedUntilReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getRentedUntil()
        );
    }

    /**
     * @test
     */
    public function setRentedUntilForDateTimeSetsRentedUntil()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setRentedUntil($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'rentedUntil',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPriceReturnsInitialValueForFloat()
    {
        self::assertSame(
            0.0,
            $this->subject->getPrice()
        );
    }

    /**
     * @test
     */
    public function setPriceForFloatSetsPrice()
    {
        $this->subject->setPrice(3.14159265);

        self::assertAttributeEquals(
            3.14159265,
            'price',
            $this->subject,
            '',
            0.000000001
        );
    }

    /**
     * @test
     */
    public function getTypeReturnsInitialValueForMediumType()
    {
        self::assertEquals(
            null,
            $this->subject->getType()
        );
    }

    /**
     * @test
     */
    public function setTypeForMediumTypeSetsType()
    {
        $typeFixture = new \ACME\Movierental\Domain\Model\MediumType();
        $this->subject->setType($typeFixture);

        self::assertAttributeEquals(
            $typeFixture,
            'type',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getUserReturnsInitialValueForUser()
    {
        self::assertEquals(
            null,
            $this->subject->getUser()
        );
    }

    /**
     * @test
     */
    public function setUserForUserSetsUser()
    {
        $userFixture = new \ACME\Movierental\Domain\Model\User();
        $this->subject->setUser($userFixture);

        self::assertAttributeEquals(
            $userFixture,
            'user',
            $this->subject
        );
    }
}
