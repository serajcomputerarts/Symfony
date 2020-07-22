<?php
// src/Controller/student.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class course extends AbstractController
{
	   /**
+      * @Route("/page2")
+      */
    public function sayhi(): Response
    {
        

         return $this->render('seraj/newtemp.html.twig', [
            'name' => "FARHAD",
        ]);
    }
}