<?php

namespace PKMegaSlider\Controller;

use PKMegaSlider\Entity\MegaSlider;
use PKMegaSlider\Form\MegaSliderType;
use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MegaSliderController extends FrameworkBundleAdminController {

  const ADMIN_TEMPLATE_PATH = '@Modules/pkmegaslider/views/templates/admin/';

  public function indexAction(Request $request): Response
  {
    $form = $this->createForm(MegaSliderType::class);

    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid()) {
      $em = $this->getDoctrine()->getManager();

      $slide = new MegaSlider();

      $slide->setName($form->get('name')->getData());
      $slide->setDescription($form->get('description')->getData());
      $slide->setImageDesktop($form->get('imageDesktop')->getData());
      $slide->setImageMobile($form->get('imageMobile')->getData());
      $slide->setLink($form->get('link')->getData());

      $em->persist($slide);
      $em->flush();

      $this->addFlash('success', 'Slide added.');
    }

    return $this->render(
      self::ADMIN_TEMPLATE_PATH . "slide.html.twig",
      [
        'form' => $form->createView()
      ]
    );
  }

  public function listAction(): Response
  {
    $em = $this->getDoctrine()->getManager();
    $data = $em->getRepository(MegaSlider::class)->findAll();

    return $this->render(
      self::ADMIN_TEMPLATE_PATH . "list.html.twig",
      [
        'data' => $data
      ]
    );
  }

  public function updateAction(int $id, Request $request): Response
  {
    $em = $this->getDoctrine()->getManager();
    $data = $em->getRepository(MegaSlider::class)->find($id);
    $form = $this->createForm(MegaSliderType::class, $data);
    $form->handleRequest($request);
    if($form->isSubmitted() && $form->isValid()) {
      $em->flush();

      $this->addFlash('success', 'Slide updated.');
    }

    return $this->render(
      self::ADMIN_TEMPLATE_PATH . 'update.html.twig',
      [
        'form' => $form->createView()
      ]
    );
  }

  public function deleteAction(int $id, Request $request): Response
  {
    $em = $this->getDoctrine()->getManager();
    $data = $em->getRepository(MegaSlider::class)->find($id);
    if(!$data) {
      $this->addFlash('error', 'This slide is not exist.');
      return $this->redirectToRoute('mega_slider_list');
    }
    $em->remove($data);
    $em->flush();
    $this->addFlash('success', 'The slide '. $id . ' removed.');

    return $this->redirectToRoute('mega_slider_list');
  }
}