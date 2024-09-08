<?php

namespace App\SharedKernel\UserInterface;

use Sulu\Bundle\WebsiteBundle\Controller\WebsiteController;
use Sulu\Component\Content\Compat\StructureInterface;
use Symfony\Component\HttpFoundation\Response;

class AppController extends WebsiteController
{
    public function indexAction(
        StructureInterface $structure,
        $preview = false,
        $partial = false
    ): Response
    {
        $locale = $this->getRequest()->getLocale();

        return $this->renderStructure(
            $structure,
            [
                'locale' => $locale,
            ],
            $preview,
            $partial
        );
    }
}