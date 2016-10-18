<?php

namespace ESIEA\PlatformBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SiteController extends Controller
{
    public function headerAction()
    {
        return $this->render('ESIEAPlatformBundle:Advert:header.html.twig');
    }
}