<?php
// src/Controller/student.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
class student extends AbstractController
{
	   /**
+      * @Route("/page1")
+      */
    public function sayhi(): Response
    {
        

        return new Response('<html><body>Hello Hadi Class</body></html>');
    }
}