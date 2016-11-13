<?php
namespace ESIEA\PlatformBundle\Controller;
use ESIEA\PlatformBundle\Entity\Delivery;
use ESIEA\PlatformBundle\Form\DeliveryType;

use ESIEA\PlatformBundle\Entity\Payment;
use ESIEA\PlatformBundle\Form\PaymentType;

use ESIEA\PlatformBundle\Entity\Advert;
use ESIEA\PlatformBundle\Form\AdvertType;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class OrderController extends Controller
{
    function faqAction()
    {
        return $this->render('ESIEAPlatformBundle:Advert:faq.html.twig');
    }

    function deliveryAction(Request $request)
    {
            $delivery = new Delivery();
            $deliveryform = $this->get('form.factory')->create(DeliveryType::class , $delivery);

            if ($request->isMethod('POST') && $deliveryform->handleRequest($request)->isValid())
              {
              $em = $this->getDoctrine()->getManager();
              $em->persist($delivery);
              $em->flush();
              $request->getSession()->getFlashBag()->add('notice', 'Vos coordonnées de livraison ont bien été enregistrées.');

              return $this->redirectToRoute('esiea_platform_payment');

              }

            return $this->render('ESIEAPlatformBundle:Order:adddelivery.html.twig', array(
              'deliveryform' => $deliveryform->createView() ,
            ));
    }
    
    function viewdeliveryAction($id)
      {
    $em = $this->getDoctrine()->getManager();
    $delivery = $em->getRepository('ESIEAPlatformBundle:Delivery')->find($id);
    if (null === $delivery)
      {
      throw new NotFoundHttpException("Vos coordonnées de livraison d'id " . $id . " n'existent pas.");
      }

    return $this->render('ESIEAPlatformBundle:Order:viewdelivery.html.twig', array(
      'delivery' => $delivery,
    ));
    }

    function updatedeliveryAction($id, Request $request)
    {
    $em = $this->getDoctrine()->getManager();
    $delivery = $em->getRepository('ESIEAPlatformBundle:Delivery')->find($id);
    if (null === $delivery)
      {
      throw new NotFoundHttpException("Vos coordonnées de livraison d'id " . $id . " n'existent pas.");
      }
      $deliveryform = $this->get('form.factory')->create(DeliveryType::class , $delivery);

    if ($request->isMethod('POST') && $deliveryform->handleRequest($request)->isValid())
      {
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Vos coordonnées ont bien été modifiées.');
      return $this->redirectToRoute('esiea_platform_recap_order', array(
        'id' => $delivery->getId()
      ));
      }

    return $this->render('ESIEAPlatformBundle:Order:updatedelivery.html.twig', array(
      'delivery' => $delivery,
      'deliveryform' => $deliveryform->createView() ,
    ));
    }
            
    function paymentAction(Request $request)
    {
    $Payment = new Payment();
    $paymentform = $this->get('form.factory')->create(PaymentType::class , $Payment);

    if ($request->isMethod('POST') && $paymentform->handleRequest($request)->isValid())
      {
      $em = $this->getDoctrine()->getManager();
      $em->persist($Payment);
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Vos information de paiement ont bien été enregistrées.');
      return $this->redirectToRoute('esiea_platform_recap_order', array(
        'id' => $Payment->getId()    ));
      }

    //Formulaire à l'affichage  
    return $this->render('ESIEAPlatformBundle:Order:addpayment.html.twig', array(
      'paymentform' => $paymentform->createView() ,
    ));
    }

    function viewpaymentAction($id)
    {
    $em = $this->getDoctrine()->getManager();
    $payment = $em->getRepository('ESIEAPlatformBundle:Payment')->find($id);
    if (null === $payment)
      {
      throw new NotFoundHttpException("Vos informations de paiement d'id " . $id . " n'existent pas.");
      }

    return $this->render('ESIEAPlatformBundle:Order:viewpayment.html.twig', array(
      'payment' => $payment,
    ));
    }

     function updatepaymentAction($id, Request $request)
    {
    $em = $this->getDoctrine()->getManager();
    $payment = $em->getRepository('ESIEAPlatformBundle:Payment')->find($id);
    if (null === $payment)
      {
      throw new NotFoundHttpException("Vos informations de paiement d'id " . $id . " n'existent pas.");
      }

    $paymentform = $this->get('form.factory')->create(PaymentType::class , $payment);

    if ($request->isMethod('POST') && $paymentform->handleRequest($request)->isValid())
      {
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Vos informations de paiement ont bien été modifiées.');
      return $this->redirectToRoute('esiea_platform_recap_order', array(
        'id' => $payment->getId()
      ));
      }

    return $this->render('ESIEAPlatformBundle:Order:updatepayment.html.twig', array(
      'payment' => $payment,
      'paymentform' => $paymentform->createView() ,
    ));
    }

      function recap_orderAction($id)
    {
    $em = $this->getDoctrine()->getManager();
    $payment = $em->getRepository('ESIEAPlatformBundle:Payment')->find($id);
    $delivery = $em->getRepository('ESIEAPlatformBundle:Delivery')->find($id);
    if (null === $payment)
      {
      throw new NotFoundHttpException("Vos informations de paiement d'id " . $id . " n'existent pas.");
      }
        if (null === $delivery)
      {
      throw new NotFoundHttpException("Vos informations de paiement d'id " . $id . " n'existent pas.");
      }

    return $this->render('ESIEAPlatformBundle:Order:recaporder.html.twig', array(
      'payment' => $payment,
      'delivery' => $delivery,
      //'advert' => $advert,
    ));
    return $this->render('ESIEAPlatformBundle:Order:recaporder.html.twig');
    }

  //To end order
    function ordersuccessAction(Request $request, $id)
    {
    $em = $this->getDoctrine()->getManager();
    $payment = $em->getRepository('ESIEAPlatformBundle:payment')->find($id);
    $delivery = $em->getRepository('ESIEAPlatformBundle:delivery')->find($id);
    if (null === $payment)
      {
      throw new NotFoundHttpException("Vos informations de paiement d'id " . $id . " n'existent pas.");
      }
       if (null === $delivery)
      {
      throw new NotFoundHttpException("Vos informations de livraison d'id " . $id . " n'existent pas.");
      }

    $form = $this->get('form.factory')->create();
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
      {
      $em->remove($payment);
      $em->flush();
      $request->getSession()->getFlashBag()->add('info', "Votre commande est en route !");
      return $this->redirectToRoute('esiea_platform_home');
      }

   
    return $this->render('ESIEAPlatformBundle:Advert:index.html.twig');
    }
}