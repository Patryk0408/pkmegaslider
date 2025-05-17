<?php

namespace PKMegaSlider\Controller;

use PKMegaSlider\Entity\MegaSlider;
use PKMegaSlider\Form\MegaSliderType;
use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MegaSliderController extends FrameworkBundleAdminController {

  public function indexAction(Request $request): Response
  {
    $form = $this->createForm(MegaSliderType::class);

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $slide = new MegaSlider();

      $slide->setName($form->get('name')->getData());
      $slide->setDescription($form->get('description')->getData());
      $slide->setImageDesktop($form->get('imagedesktop')->getData());
      $slide->setImageMobile($form->get('imagemobile')->getData());
      $slide->setLink($form->get('link')->getData());

      $em->persist($slide);
      $em->flush();

      $this->addFlash('success', 'Product added');
    }

    return $this->render(
      "@Modules/pkmegaslider/views/templates/admin/slide.html.twig",
      [
        'test' => 'Hello World testpk',
        'form' => $form->createView()
      ]
    );
  }
}