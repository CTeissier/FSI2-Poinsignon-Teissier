<?php

namespace ESIEA\CoreBundle\Controller;

use ESIEA\PlatformBundle\Entity\Advert;
use ESIEA\PlatformBundle\Form\AdvertEditType;
use ESIEA\PlatformBundle\Form\AdvertType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;



class CoreController extends Controller
{
  // La page d'accueil
  public function indexAction()
  {
   
    if ($page < 1) {
      throw new NotFoundHttpException('Page "'.$page.'" inexistante.');
    }
    // Ici je fixe le nombre d'annonces par page à 3
    // Mais bien sûr il faudrait utiliser un paramètre, et y accéder via $this->container->getParameter('nb_per_page')
    $nbPerPage = 3;
    // On récupère notre objet Paginator
    $listAdverts = $this->getDoctrine()
      ->getManager()
      ->getRepository('ESIEAPlatformBundle:Advert')
      ->getAdverts($page, $nbPerPage)
    ;
    // On calcule le nombre total de pages grâce au count($listAdverts) qui retourne le nombre total d'annonces
    $nbPages = ceil(count($listAdverts) / $nbPerPage);
    // Si la page n'existe pas, on retourne une 404
    if ($page > $nbPages) {
      throw $this->createNotFoundException("La page ".$page." n'existe pas.");
    }
    // On donne toutes les informations nécessaires à la vue
    return $this->render('ESIEAPlatformBundle:Advert:index.html.twig', array(
      'listAdverts' => $listAdverts,
      'nbPages'     => $nbPages,
      'page'        => $page,
    ));
  }




  
  }

  

