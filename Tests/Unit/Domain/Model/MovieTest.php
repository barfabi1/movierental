<?php
namespace ACME\Movierental\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author John Simple 
 */
class MovieTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ACME\Movierental\Domain\Model\Movie
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \ACME\Movierental\Domain\Model\Movie();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle()
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'title',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription()
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'description',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getRatingReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getRating()
        );
    }

    /**
     * @test
     */
    public function setRatingForStringSetsRating()
    {
        $this->subject->setRating('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'rating',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getGenresReturnsInitialValueForGenre()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getGenres()
        );
    }

    /**
     * @test
     */
    public function setGenresForObjectStorageContainingGenreSetsGenres()
    {
        $genre = new \ACME\Movierental\Domain\Model\Genre();
        $objectStorageHoldingExactlyOneGenres = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneGenres->attach($genre);
        $this->subject->setGenres($objectStorageHoldingExactlyOneGenres);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneGenres,
            'genres',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addGenreToObjectStorageHoldingGenres()
    {
        $genre = new \ACME\Movierental\Domain\Model\Genre();
        $genresObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $genresObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($genre));
        $this->inject($this->subject, 'genres', $genresObjectStorageMock);

        $this->subject->addGenre($genre);
    }

    /**
     * @test
     */
    public function removeGenreFromObjectStorageHoldingGenres()
    {
        $genre = new \ACME\Movierental\Domain\Model\Genre();
        $genresObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $genresObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($genre));
        $this->inject($this->subject, 'genres', $genresObjectStorageMock);

        $this->subject->removeGenre($genre);
    }

    /**
     * @test
     */
    public function getDirectorReturnsInitialValueFor()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getDirector()
        );
    }

    /**
     * @test
     */
    public function setDirectorForObjectStorageContainingSetsDirector()
    {
        $director = new ();
        $objectStorageHoldingExactlyOneDirector = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneDirector->attach($director);
        $this->subject->setDirector($objectStorageHoldingExactlyOneDirector);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneDirector,
            'director',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addDirectorToObjectStorageHoldingDirector()
    {
        $director = new ();
        $directorObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $directorObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($director));
        $this->inject($this->subject, 'director', $directorObjectStorageMock);

        $this->subject->addDirector($director);
    }

    /**
     * @test
     */
    public function removeDirectorFromObjectStorageHoldingDirector()
    {
        $director = new ();
        $directorObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $directorObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($director));
        $this->inject($this->subject, 'director', $directorObjectStorageMock);

        $this->subject->removeDirector($director);
    }

    /**
     * @test
     */
    public function getStudioReturnsInitialValueForStudio()
    {
        self::assertEquals(
            null,
            $this->subject->getStudio()
        );
    }

    /**
     * @test
     */
    public function setStudioForStudioSetsStudio()
    {
        $studioFixture = new \ACME\Movierental\Domain\Model\Studio();
        $this->subject->setStudio($studioFixture);

        self::assertAttributeEquals(
            $studioFixture,
            'studio',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getCopiesReturnsInitialValueForMedium()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getCopies()
        );
    }

    /**
     * @test
     */
    public function setCopiesForObjectStorageContainingMediumSetsCopies()
    {
        $copy = new \ACME\Movierental\Domain\Model\Medium();
        $objectStorageHoldingExactlyOneCopies = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneCopies->attach($copy);
        $this->subject->setCopies($objectStorageHoldingExactlyOneCopies);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneCopies,
            'copies',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addCopyToObjectStorageHoldingCopies()
    {
        $copy = new \ACME\Movierental\Domain\Model\Medium();
        $copiesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $copiesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($copy));
        $this->inject($this->subject, 'copies', $copiesObjectStorageMock);

        $this->subject->addCopy($copy);
    }

    /**
     * @test
     */
    public function removeCopyFromObjectStorageHoldingCopies()
    {
        $copy = new \ACME\Movierental\Domain\Model\Medium();
        $copiesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $copiesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($copy));
        $this->inject($this->subject, 'copies', $copiesObjectStorageMock);

        $this->subject->removeCopy($copy);
    }
}
