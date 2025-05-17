<?php

namespace PKMegaSlider\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;

class MegaSliderController extends FrameworkBundleAdminController {

  public function indexAction(Request $requesty): Response
  {
    return $this->render(
      "@Modules/pkmegaslider/views/templates/admin/slides.html.twig"
    );
  }
}