<?php
namespace ESIEA\PlatformBundle\Controller;
use ESIEA\PlatformBundle\Entity\Delivery;
use ESIEA\PlatformBundle\Form\DeliveryType;

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

    /*  
        public function deliveryAction()
    {
        return $this->render('ESIEAPlatformBundle:Advert:delivery.html.twig');
    }
        public function paymentAction()
    {
        return $this->render('ESIEAPlatformBundle:Advert:payment.html.twig');
    }
    */
    public function deliveryAction(Request $request)
    {
            $delivery = new Delivery();
            $deliveryform = $this->get('form.factory')->create(DeliveryType::class , $delivery);

            if ($request->isMethod('POST') && $deliveryform->handleRequest($request)->isValid())
              {
              $em = $this->getDoctrine()->getManager();
              $em->persist($delivery);
              $em->flush();
              $request->getSession()->getFlashBag()->add('notice', 'Recette bien enregistrée.');
              return $this->redirectToRoute('esiea_platform_view', array(
                'id' => $delivery->getId()
              ));
              }

            return $this->render('ESIEAPlatformBundle:Advert:adddelivery.html.twig', array(
              'deliveryform' => $deliveryform->createView() ,
            ));
    }



      function viewdeliveryAction($id)
      {
    $em = $this->getDoctrine()->getManager();
    $delivery = $em->getRepository('ESIEAPlatformBundle:Delivery')->find($id);
    if (null === $delivery)
      {
      throw new NotFoundHttpException("La recette d'id " . $id . " n'existe pas.");
      }

    return $this->render('ESIEAPlatformBundle:Advert:viewdelivery.html.twig', array(
      'delivery' => $delivery,
    ));
}
            
        public function paymentAction()
    {
        return $this->render('ESIEAPlatformBundle:Advert:payment.html.twig');
    }
}