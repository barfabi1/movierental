<?php
namespace ACME\Movierental\Service;

class ExternalApiService implements \TYPO3\CMS\Core\SingletonInterface
{
    /**
     * @param \ACME\Movierental\Domain\Model\Movie $movie
     * @return array
     */
    public function validateData(\ACME\Movierental\Domain\Model\Movie $movie){
        $errors = [];
        $fb = file_get_contents('https://graph.facebook.com/'.preg_replace('/\s+/', '', $movie->getTitle()), false,
            stream_context_create(
                array(
                    'https' => array(
                        'ignore_errors' => true
                    )
                )
            )
        );
        $fb = json_decode($fb, true);

        //var_dump($fb);die();
        if(!$fb['errror']) {
            $errors['title'] = 'Title exists as an user at Facebook (ID = '.$fb['id'].' / URL = '.$fb['link'].')!';
        }

        return $errors;
    }
}
