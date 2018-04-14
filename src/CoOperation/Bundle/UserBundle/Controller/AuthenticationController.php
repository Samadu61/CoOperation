<?php

namespace CoOperation\Bundle\UserBundle\Controller;

use CoOperation\Bundle\UserBundle\Entity\User;
use CoOperation\Bundle\UserBundle\Form\Type\UserType;
use DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class AuthenticationController extends Controller
{
    /**
     * @var AuthenticationUtils
     */
    private $authUtils;
    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    public function __construct(AuthenticationUtils $authUtils, UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->authUtils = $authUtils;
        $this->passwordEncoder = $passwordEncoder;
    }

    public function loginAction(): Response
    {
        $error = $this->authUtils->getLastAuthenticationError();

        $lastUsername = $this->authUtils->getLastUsername();

        return $this->render('@CoOperationUser/Authentication/login.html.twig', compact('error', 'lastUsername'));
    }

    public function registerAction(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $password = $this->passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            $user->setCreatedAt(new DateTime);
            $user->setUpdatedAt(new DateTime);

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();

            return $this->redirectToRoute('core_homepage');
        }

        return $this->render('@CoOperationUser/Authentication/register.html.twig', array(
            'form' => $form->createView()
        ));
    }
}
