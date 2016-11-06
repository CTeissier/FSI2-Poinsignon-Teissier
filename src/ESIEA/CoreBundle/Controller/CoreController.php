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
   public function indexAction($page)
  {
    if ($page < 1) {
     $page = 1;
    return $this->render('ESIEAPlatformBundle:Advert:add.html.twig');
    }
    
    $nbPerPage = 5;
    $listAdverts = $this->getDoctrine()
      ->getManager()
      ->getRepository('ESIEAPlatformBundle:Advert')
      ->getAdverts($page, $nbPerPage)
    ;

    $nbPages = ceil(count($listAdverts) / $nbPerPage);
    // Si la page n'existe pas, on retourne une 404
    if ($page > $nbPages) {
      throw $this->createNotFoundException("La recette ".$page." n'existe pas.");
    }

    return $this->render('ESIEAPlatformBundle:Advert:index.html.twig', array(
      'listAdverts' => $listAdverts,
      'nbPages'     => $nbPages,
      'page'        => $page,
    ));
  }
}

