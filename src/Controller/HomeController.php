<?php
/**
 * Copyright (c) 2018 Tiago Felipe <tiago@tiagofelipe.com>
 * For the full copyright and license information, please view the LICENSE file
 * that was distributed with this source code.
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class HomeController extends Controller
{

    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('home/home.html.twig');
    }

}