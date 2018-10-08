<?php
namespace ACME\Movierental\Domain\Model;

/***
 *
 * This file is part of the "Movie Rental System" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 John Simple
 *
 ***/

/**
 * The movie rental user
 */
class User extends \TYPO3\CMS\Extbase\Domain\Model\FrontendUser
{
    /**
     * rented
     *
     * @var bool
     */
    protected $rented = false;

    /**
     * avatar
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @cascade remove
     */
    protected $avatar = null;

    /**
     * wishlist
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ACME\Movierental\Domain\Model\Movie>
     * @cascade remove
     */
    protected $wishlist = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->wishlist = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the rented
     *
     * @return bool $rented
     */
    public function getRented()
    {
        return $this->rented;
    }

    /**
     * Sets the rented
     *
     * @param bool $rented
     * @return void
     */
    public function setRented($rented)
    {
        $this->rented = $rented;
    }

    /**
     * Returns the boolean state of rented
     *
     * @return bool
     */
    public function isRented()
    {
        return $this->rented;
    }

    /**
     * Returns the avatar
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $avatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Sets the avatar
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $avatar
     * @return void
     */
    public function setAvatar(\TYPO3\CMS\Extbase\Domain\Model\FileReference $avatar)
    {
        $this->avatar = $avatar;
    }

    /**
     * Adds a Movie
     *
     * @param \ACME\Movierental\Domain\Model\Movie $wishlist
     * @return void
     */
    public function addWishlist(\ACME\Movierental\Domain\Model\Movie $wishlist)
    {
        $this->wishlist->attach($wishlist);
    }

    /**
     * Removes a Movie
     *
     * @param \ACME\Movierental\Domain\Model\Movie $wishlistToRemove The Movie to be removed
     * @return void
     */
    public function removeWishlist(\ACME\Movierental\Domain\Model\Movie $wishlistToRemove)
    {
        $this->wishlist->detach($wishlistToRemove);
    }

    /**
     * Returns the wishlist
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ACME\Movierental\Domain\Model\Movie> $wishlist
     */
    public function getWishlist()
    {
        return $this->wishlist;
    }

    /**
     * Sets the wishlist
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\ACME\Movierental\Domain\Model\Movie> $wishlist
     * @return void
     */
    public function setWishlist(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $wishlist)
    {
        $this->wishlist = $wishlist;
    }
}
