<?php
// src/OC/UserBundle/Controller/SecurityController.php;

namespace UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class SecurityController extends Controller
{
  /**
   * @Route("/login", name="login")
   */
  public function loginAction(Request $request)
  {
    $authenticationUtils = $this->get('security.authentication_utils');

    // get the login error if there is one
    $error = $authenticationUtils->getLastAuthenticationError();

    // last username entered by the user
    $lastUsername = $authenticationUtils->getLastUsername();

    return $this->render(
        'UserBundle:Security:login.html.twig',
        array(
            // last username entered by the user
            'last_username' => $lastUsername,
            'error'         => $error,
        )
    );
  }

  /**
  * @Route("/login_check", name="login_check")
  */
 public function loginCheckAction()
 {
     // this controller will not be executed,
     // as the route is handled by the Security system
 }
 
}
