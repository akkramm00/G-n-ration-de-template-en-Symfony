<html>
  <head>
    <title>Affichage de la première page HTML avec TWIG</title>
  </head>
  <body>
<h2>HTML ave TWIG</h2>
<p>
  Si vous voulez retourner du HTML depuis votre controller, vous voudrez probablement rendre un modèle de page .On appelle ce modèle de page "template".
  Heureusement , Symfony est livré avec un moteur de template appelé "TWIG" : un langage templating minimal, puissant et assez facile à prendre en main.
</p>
    <h2>Définition d'un système de template</h2>

    <p>
      Un système de tem^plate permet de gébérer des pages HTML classiques tout en injectant des variables provenant de  Symfony. Nous générnos alors des "vues". Ce sont des "views"de la términologie "MVC". Ce mécanisme permet une approche tès puissante de modèles de pages.
    </p>

    <h3>Méthode de génération de template</h3>
    <p>
      Pour que le controller pyisse générer des vues en Twig, il faut que ce controller etende de la classe abstraite "AbstractController". Cette classe contient une collection de m"thodes qui donneront à nos controller plus de  fonctionnalités notamment sur la géstion des requêtes et des réponses.
      Cette classe AbstractController contient aussi la méthode render qui permet de générer un rendu HTML depuyis les templates Twig. Donc dans notre controller initial, il va apportet quelques modifications:

      1- Ajouter la mention de l'extension de la classe grâce à extends AbstractController.
      2- importer la class AbstractController qui se trouve dans le namespace Symfony\bundlr\FrameworkBundle\Controller.
      3- Utiliser la vcue Twig par defaut se trouvant dans le dossier "/templates".
      4- Utliliser la methode render en précisiant la vue et le s paramètres que l'on souhaite passer à la vue.
    </p>

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
  </body>
</html>