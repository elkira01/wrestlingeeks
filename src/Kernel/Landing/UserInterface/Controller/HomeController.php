<?php

declare(strict_types=1);

namespace App\Kernel\Landing\UserInterface\Controller;

use App\SharedKernel\UserInterface\AppController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AppController
{
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
