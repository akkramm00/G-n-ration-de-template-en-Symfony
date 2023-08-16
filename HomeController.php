<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\FrameworkBundle\Controller\AbstractController;

class HomeController Extends AbstractController
  {
    #[Route('/')]
    public function number() : Response
    {
      $number = rand(0, 100);
      return $this->render('base.html.twig', [
                           'number' => $number,
      ]);
    }
  }
?>