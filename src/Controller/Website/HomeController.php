<?php

declare(strict_types=1);

namespace App\Controller\Website;

use Sulu\Bundle\WebsiteBundle\Controller\WebsiteController;
use Sulu\Component\Content\Compat\StructureInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Translation\TranslatableMessage;

class HomeController extends WebsiteController
{
    public function indexAction(StructureInterface $structure, $preview = false, $partial = false): Response
    {

        return $this->renderStructure(
            $structure,
            [],
            $preview,
            $partial
        );
    }

    public function home(Request $request): Response
    {
        return $this->render(
            'pages/homepage.html.twig'
        );
    }
}
