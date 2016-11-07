<?php
// src/ESIEA/PlatformBundle/Controller/AdvertController.php
namespace ESIEA\PlatformBundle\Controller;
use ESIEA\PlatformBundle\Entity\Advert;
use ESIEA\PlatformBundle\Form\AdvertEditType;
use ESIEA\PlatformBundle\Form\AdvertType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller

  {

  function paypal_paymentAction()
    {
    $api_paypal = 'https://api-3t.sandbox.paypal.com/nvp?'; // Site de l'API PayPal. On ajoute déjà le ? afin de concaténer directement les paramètres.
    $version = 56.0; // Version de l'API
    $user = 'esieaeats.com'; // Utilisateur API
    $pass = 'EEADHRPYSINXGDVM'; // Mot de passe API
    $signature = 'FKjyxmNtVWvHUmDEGgYszvtJlBrAYNbpjxTPeTTp-51ZsmLx6sS3'; // Signature de l'API
    $api_paypal = $api_paypal . 'VERSION=' . $version . '&USER=' . $user . '&PWD=' . $pass . '&SIGNATURE=' . $signature; // Ajoute tous les paramètres
    return $api_paypal; // Renvoie la chaîne contenant tous nos paramètres.
    }


  function indexAction($page)
    {
    if ($page < 1)
      {
      $page = 1;
      }

    $nbPerPage = 5;
    $listAdverts = $this->getDoctrine()->getManager()->getRepository('ESIEAPlatformBundle:Advert')->getAdverts($page, $nbPerPage);
    $nbPages = ceil(count($listAdverts) / $nbPerPage);

    // Si la page n'existe pas, on retourne une 404

    if ($page > $nbPages)
      {
      throw $this->createNotFoundException("La recette " . $page . " n'existe pas.");
      }

    return $this->render('ESIEAPlatformBundle:Advert:index.html.twig', array(
      'listAdverts' => $listAdverts,
      'nbPages' => $nbPages,
      'page' => $page,
    ));
    }


  function viewAction($id)
    {
    $em = $this->getDoctrine()->getManager();
    $advert = $em->getRepository('ESIEAPlatformBundle:Advert')->find($id);
    if (null === $advert)
      {
      throw new NotFoundHttpException("La recette d'id " . $id . " n'existe pas.");
      }

    return $this->render('ESIEAPlatformBundle:Advert:view.html.twig', array(
      'advert' => $advert,
    ));
    }


  function loginAction($page)
    {
    $pass_hache = sha1($_POST['pass']);

    // Vérification des identifiants
    // TO-DO : BDD

    $req->execute(array(
      'pseudo' => $pseudo,
      'pass' => $pass_hache
    ));
    $resultat = $req->fetch();
    if (!$resultat)
      {
      echo 'Mauvais identifiant ou mot de passe !';
      }
      else
      {
      session_start();
      $_SESSION['id'] = $resultat['id'];
      $_SESSION['pseudo'] = $pseudo;
      echo 'Vous êtes connecté !';
      }
    }


  function addAction(Request $request)
    {
    $advert = new Advert();
    $form = $this->get('form.factory')->create(AdvertType::class , $advert);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
      {
      $em = $this->getDoctrine()->getManager();
      $em->persist($advert);
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Recette bien enregistrée.');
      return $this->redirectToRoute('esiea_platform_view', array(
        'id' => $advert->getId()
      ));
      }

    return $this->render('ESIEAPlatformBundle:Advert:add.html.twig', array(
      'form' => $form->createView() ,
    ));
    }


  function editAction($id, Request $request)
    {
    $em = $this->getDoctrine()->getManager();
    $advert = $em->getRepository('ESIEAPlatformBundle:Advert')->find($id);
    if (null === $advert)
      {
      throw new NotFoundHttpException("La recette d'id " . $id . " n'existe pas.");
      }

    $form = $this->get('form.factory')->create(AdvertEditType::class , $advert);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
      {
      $em->flush();
      $request->getSession()->getFlashBag()->add('notice', 'Recette bien modifiée.');
      return $this->redirectToRoute('esiea_platform_view', array(
        'id' => $advert->getId()
      ));
      }

    return $this->render('ESIEAPlatformBundle:Advert:edit.html.twig', array(
      'advert' => $advert,
      'form' => $form->createView() ,
    ));
    }


  function deleteAction(Request $request, $id)
    {
    $em = $this->getDoctrine()->getManager();
    $advert = $em->getRepository('ESIEAPlatformBundle:Advert')->find($id);
    if (null === $advert)
      {
      throw new NotFoundHttpException("La recette d'id " . $id . " n'existe pas.");
      }

    $form = $this->get('form.factory')->create();
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid())
      {
      $em->remove($advert);
      $em->flush();
      $request->getSession()->getFlashBag()->add('info', "La recette a bien été supprimée.");
      return $this->redirectToRoute('esiea_platform_home');
      }

    return $this->render('ESIEAPlatformBundle:Advert:delete.html.twig', array(
      'advert' => $advert,
      'form' => $form->createView() ,
    ));
    }


  function menuAction($limit)
    {
    $em = $this->getDoctrine()->getManager();
    $listAdverts = $em->getRepository('ESIEAPlatformBundle:Advert')->findBy(array() , array(
      'date' => 'desc'
    ) , $limit, 0);
    return $this->render('ESIEAPlatformBundle:Advert:menu.html.twig', array(
      'listAdverts' => $listAdverts
    ));
    }

  
  function newdeliveryAction(Request $request)
    {
    $delivery = new delivery();
    $form = $this->createForm(new paymentType() , $delivery);
    $form->handleRequest($request);
    if ($form->isValid())
      {
      $em = $this->getDoctrine()->getManager();
      $em->persist($delivery);
      $em->flush();
      return $this->redirectToRoute('delivery');
      }
    }

  function paymentupdateAction(Request $request)
    {
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()){
     $request->getSession()->getFlashBag()->add('info', "La recette a bien été supprimée.");
    
    return $this->redirectToRoute('esiea_platform_home');
    }
    return $this->render('ESIEAPlatformBundle:Advert:index.html.twig');  
    }
  }
