<?php

// # src/ESIEA/PlatformBundle/Resources/config/AdvertController.php

namespace ESIEA\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;


class AdvertController extends Controller
{

public function viewAction($id)

  {
    return new Response("Affichage de l'annonce d'id : ".$id);
  }
	
}

