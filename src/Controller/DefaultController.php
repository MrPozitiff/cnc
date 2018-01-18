<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 014 14.01.18
 * Time: 19:42
 */

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return $this->render('pages/homepage.html.twig');
    }
}