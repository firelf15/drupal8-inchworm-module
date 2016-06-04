<?php

namespace Drupal\inchworm\Controller;

use Symfony\Component\HttpFoundation\Response;

class InchwormController {
  public function inchworm() {
    return New Response('Two and two are four.');
  }
}
