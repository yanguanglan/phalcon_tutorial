<?php

class SignupController extends \Phalcon\Mvc\Controller
{
  public function indexAction()
  {

  }

  public function registerAction()
  {
    $user = new Users();

    // store and error check
    $success = $user->save($this->request->getPost(), array('name', 'email'));

    if ($success) {
      echo "Thank you for registering!";
    } else {
      echo "Sorry, the following errors occurred: ";
      foreach ($user->getMessages() as $message) {
        echo $message->getMessage(), "<br>";
      }
    }

    $this->view->disable();
  }
}
