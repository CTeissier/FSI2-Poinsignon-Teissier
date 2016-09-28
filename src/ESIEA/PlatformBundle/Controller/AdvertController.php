<?php

// # src/ESIEA/PlatformBundle/Resources/config/AdvertController.php

namespace ESIEA\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
#Génération d'un URL absolu


class AdvertController extends Controller
{

/*public function viewAction($id)

  {
    return new Response("Affichage de l'annonce d'id : ".$id);
  }*/


 /*public function viewSlugAction($slug, $year, $format)

    {
        return new Response(
            "On pourrait afficher l'annonce correspondant au

            slug '".$slug."', créée en ".$year." et au format ".$format."."
        );  
	}*/

	 public function viewAction()
    {
        // On veut avoir l'URL de l'annonce d'id 5.
        $url = $this->get('router')->generate(
            'esiea_platform_view', // 1er argument : le nom de la route
            array('id' => 5), UrlGeneratorInterface::ABSOLUTE_URL    // 2e argument : les valeurs des paramètres
            #Génération d'un URL absolue
        );
        // $url vaut « /platform/advert/5 »
        
        return new Response("L'URL de l'annonce d'id 5 est : ".$url);
    }
}
