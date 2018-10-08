<?php
namespace ACME\Movierental\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author John Simple 
 */
class GenreControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \ACME\Movierental\Controller\GenreController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\ACME\Movierental\Controller\GenreController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllGenresFromRepositoryAndAssignsThemToView()
    {

        $allGenres = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $genreRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $genreRepository->expects(self::once())->method('findAll')->will(self::returnValue($allGenres));
        $this->inject($this->subject, 'genreRepository', $genreRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('genres', $allGenres);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenGenreToView()
    {
        $genre = new \ACME\Movierental\Domain\Model\Genre();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('genre', $genre);

        $this->subject->showAction($genre);
    }
}
