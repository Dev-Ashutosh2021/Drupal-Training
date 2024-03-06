<?php

namespace Drupal\basic_page\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\user\Entity\User;

class BasicPageController extends ControllerBase
{

    public function basicPage()
    {

        $headers = [
            $this->t('Username'),
            $this->t('Email'),
            $this->t('Role'),
            $this->t('Created Date'),
        ];

        $users = User::loadMultiple();

        $rows = [];

        foreach ($users as $user) {

            $username = $user->getAccountName();
            $email = $user->getEmail();
            $roles = implode(', ', $user->getRoles());
            $created_date = \Drupal::service('date.formatter')->format($user->getCreatedTime(), 'short');

            $rows[] = [
                $username,
                $email,
                $roles,
                $created_date,
            ];
        }

        $build = [
            '#type' => 'table',
            '#header' => $headers,
            '#rows' => $rows,
            '#attached' => [
                'library' => [
                    'basic_page/basic_page_library',
                ],
            ],
        ];
        

        return $build;
    }




    public function renderCustomBlock()
    {
        $block_plugin = \Drupal::service('plugin.manager.block')
            ->createInstance('hello_block');

        $build = $block_plugin->build();

        return $build;
    }

}
