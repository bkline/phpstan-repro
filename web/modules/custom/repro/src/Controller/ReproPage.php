<?php

namespace Drupal\repro\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\file\Entity\File;
use Drupal\user\Entity\User;

/**
 * Simple page demonstrating unfound symbols.
 */
class ReproPage extends ControllerBase {

  public function display(): array {
    $users = User::loadMultiple();
    $files = File::loadMultiple();
    $nusers = count($users);
    $nfiles = count($files);
    return [
      '#theme' => 'item_list',
      '#title' => 'Demo',
      '#items' => ["$nusers users", "$nfiles files"],
    ];
  }

}
