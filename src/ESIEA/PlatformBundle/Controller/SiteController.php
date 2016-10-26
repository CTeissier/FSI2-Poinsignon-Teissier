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

      public function faqAction()
    {
        return $this->render('ESIEAPlatformBundle:Advert:faq.html.twig');
    }

        public function deliveryAction()
    {
        return $this->render('ESIEAPlatformBundle:Advert:delivery.html.twig');
    }


        public function paymentAction()
    {
        return $this->render('ESIEAPlatformBundle:Advert:payment.html.twig');
    }


}