<?php

// # src/OC/PlatformBundle/Resources/config/AdvertController.php

namespace ESIEA\PlatformBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdvertController extends Controller
{
	public function indexAction()
	{
		
		$content = $this->get('templating')->render('ESIEAPlatformBundle:Advert:index.html.twig', array('nom' => 'winzou'));

		return new Response($content);
	}

}

