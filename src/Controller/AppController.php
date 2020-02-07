<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AppController extends AbstractController
{
    /**
     * @Route("/admin", name="admin_page")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            
        ]);
    }
}
