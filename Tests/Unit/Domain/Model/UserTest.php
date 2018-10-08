<?php
namespace ACME\Movierental\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author John Simple 
 */
class UserTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ACME\Movierental\Domain\Model\User
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \ACME\Movierental\Domain\Model\User();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getRentedReturnsInitialValueForBool()
    {
        self::assertSame(
            false,
            $this->subject->getRented()
        );
    }

    /**
     * @test
     */
    public function setRentedForBoolSetsRented()
    {
        $this->subject->setRented(true);

        self::assertAttributeEquals(
            true,
            'rented',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getAvatarReturnsInitialValueForFileReference()
    {
        self::assertEquals(
            null,
            $this->subject->getAvatar()
        );
    }

    /**
     * @test
     */
    public function setAvatarForFileReferenceSetsAvatar()
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setAvatar($fileReferenceFixture);

        self::assertAttributeEquals(
            $fileReferenceFixture,
            'avatar',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getWishlistReturnsInitialValueForMovie()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getWishlist()
        );
    }

    /**
     * @test
     */
    public function setWishlistForObjectStorageContainingMovieSetsWishlist()
    {
        $wishlist = new \ACME\Movierental\Domain\Model\Movie();
        $objectStorageHoldingExactlyOneWishlist = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneWishlist->attach($wishlist);
        $this->subject->setWishlist($objectStorageHoldingExactlyOneWishlist);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneWishlist,
            'wishlist',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addWishlistToObjectStorageHoldingWishlist()
    {
        $wishlist = new \ACME\Movierental\Domain\Model\Movie();
        $wishlistObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $wishlistObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($wishlist));
        $this->inject($this->subject, 'wishlist', $wishlistObjectStorageMock);

        $this->subject->addWishlist($wishlist);
    }

    /**
     * @test
     */
    public function removeWishlistFromObjectStorageHoldingWishlist()
    {
        $wishlist = new \ACME\Movierental\Domain\Model\Movie();
        $wishlistObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $wishlistObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($wishlist));
        $this->inject($this->subject, 'wishlist', $wishlistObjectStorageMock);

        $this->subject->removeWishlist($wishlist);
    }
}
