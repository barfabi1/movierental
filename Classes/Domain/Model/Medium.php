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
 * Medium
 */
class Medium extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * isRented
     *
     * @var bool
     */
    protected $isRented = false;

    /**
     * rentedOn
     *
     * @var \DateTime
     */
    protected $rentedOn = null;

    /**
     * rentedUntil
     *
     * @var \DateTime
     */
    protected $rentedUntil = null;

    /**
     * price
     *
     * @var float
     */
    protected $price = 0.0;

    /**
     * type
     *
     * @var \ACME\Movierental\Domain\Model\MediumType
     */
    protected $type = null;

    /**
     * user
     *
     * @var \ACME\Movierental\Domain\Model\User
     */
    protected $user = null;

    /**
     * Returns the isRented
     *
     * @return bool $isRented
     */
    public function getIsRented()
    {
        return $this->isRented;
    }

    /**
     * Sets the isRented
     *
     * @param bool $isRented
     * @return void
     */
    public function setIsRented($isRented)
    {
        $this->isRented = $isRented;
    }

    /**
     * Returns the boolean state of isRented
     *
     * @return bool
     */
    public function isIsRented()
    {
        return $this->isRented;
    }

    /**
     * Returns the rentedOn
     *
     * @return \DateTime $rentedOn
     */
    public function getRentedOn()
    {
        return $this->rentedOn;
    }

    /**
     * Sets the rentedOn
     *
     * @param \DateTime $rentedOn
     * @return void
     */
    public function setRentedOn(\DateTime $rentedOn)
    {
        $this->rentedOn = $rentedOn;
    }

    /**
     * Returns the rentedUntil
     *
     * @return \DateTime $rentedUntil
     */
    public function getRentedUntil()
    {
        return $this->rentedUntil;
    }

    /**
     * Sets the rentedUntil
     *
     * @param \DateTime $rentedUntil
     * @return void
     */
    public function setRentedUntil(\DateTime $rentedUntil)
    {
        $this->rentedUntil = $rentedUntil;
    }

    /**
     * Returns the price
     *
     * @return float $price
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets the price
     *
     * @param float $price
     * @return void
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * Returns the type
     *
     * @return \ACME\Movierental\Domain\Model\MediumType $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param \ACME\Movierental\Domain\Model\MediumType $type
     * @return void
     */
    public function setType(\ACME\Movierental\Domain\Model\MediumType $type)
    {
        $this->type = $type;
    }

    /**
     * Returns the user
     *
     * @return \ACME\Movierental\Domain\Model\User $user
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Sets the user
     *
     * @param \ACME\Movierental\Domain\Model\User $user
     * @return void
     */
    public function setUser(\ACME\Movierental\Domain\Model\User $user)
    {
        $this->user = $user;
    }
}
