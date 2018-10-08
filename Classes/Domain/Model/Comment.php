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
 * Comment
 */
class Comment extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * text
     *
     * @var string
     */
    protected $text = '';

    /**
     * date
     *
     * @var \DateTime
     */
    protected $date = null;

    /**
     * user
     *
     * @var \ACME\Movierental\Domain\Model\User
     */
    protected $user = null;

    /**
     * Returns the text
     *
     * @return string $text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets the text
     *
     * @param string $text
     * @return void
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * Returns the date
     *
     * @return \DateTime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     *
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
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
