<?php
namespace ACME\Movierental\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author John Simple 
 */
class DirectorTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ACME\Movierental\Domain\Model\Director
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \ACME\Movierental\Domain\Model\Director();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAwardsReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getAwards()
        );
    }

    /**
     * @test
     */
    public function setAwardsForStringSetsAwards()
    {
        $this->subject->setAwards('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'awards',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getBiographyReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getBiography()
        );
    }

    /**
     * @test
     */
    public function setBiographyForStringSetsBiography()
    {
        $this->subject->setBiography('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'biography',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPictureReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPicture()
        );
    }

    /**
     * @test
     */
    public function setPictureForStringSetsPicture()
    {
        $this->subject->setPicture('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'picture',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMoviesReturnsInitialValueForMovie()
    {
        self::assertEquals(
            null,
            $this->subject->getMovies()
        );
    }

    /**
     * @test
     */
    public function setMoviesForMovieSetsMovies()
    {
        $moviesFixture = new \ACME\Movierental\Domain\Model\Movie();
        $this->subject->setMovies($moviesFixture);

        self::assertAttributeEquals(
            $moviesFixture,
            'movies',
            $this->subject
        );
    }
}
