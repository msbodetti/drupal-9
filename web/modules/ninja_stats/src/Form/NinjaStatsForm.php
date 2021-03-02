<?php

namespace Drupal\ninja_stats\Form;

use Drupal\Core\Entity\ContentEntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Form controller for the ninja stats entity edit forms.
 */
class NinjaStatsForm extends ContentEntityForm {

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {

    $entity = $this->getEntity();
    $result = $entity->save();
    $link = $entity->toLink($this->t('View'))->toRenderable();

    $message_arguments = ['%label' => $this->entity->label()];
    $logger_arguments = $message_arguments + ['link' => render($link)];

    if ($result == SAVED_NEW) {
      $this->messenger()->addStatus($this->t('New ninja stats %label has been created.', $message_arguments));
      $this->logger('ninja_stats')->notice('Created new ninja stats %label', $logger_arguments);
    }
    else {
      $this->messenger()->addStatus($this->t('The ninja stats %label has been updated.', $message_arguments));
      $this->logger('ninja_stats')->notice('Updated new ninja stats %label.', $logger_arguments);
    }

    $form_state->setRedirect('entity.ninja_stats.canonical', ['ninja_stats' => $entity->id()]);
  }

}
