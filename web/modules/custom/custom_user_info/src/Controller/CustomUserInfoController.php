<?php

namespace Drupal\custom_user_info\Controller;

use Drupal\Core\Controller\ControllerBase;

class CustomUserInfoController extends ControllerBase
{

  public function content()
  {

    $user = $this->currentUser();

    $name = $user->getAccountName();
    $email = $user->getEmail();
    $roles = implode(', ', $user->getRoles());

    $content = [
      '#markup' => $this->t('<h6>Logged in as: @name <br>Email: @email <br>Roles: @roles</h6>', [
        '@name' => $name,
        '@email' => $email,
        '@roles' => $roles,
      ]),
    ];

    return $content;
  }

}
