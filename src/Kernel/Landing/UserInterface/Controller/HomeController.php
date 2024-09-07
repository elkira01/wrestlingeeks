<?php

declare(strict_types=1);

namespace App\Kernel\Landing\UserInterface\Controller;

use Sulu\Bundle\WebsiteBundle\Controller\WebsiteController;
use Sulu\Component\Content\Compat\StructureInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends WebsiteController
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

    public function home(
        Request $request
    ): Response
    {
        $locale = $request->getLocale();

        return $this->render(
            'pages/homepage.html.twig',
            [
                'locale' => $locale
            ]
        );
    }
}
