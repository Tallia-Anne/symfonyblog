<?php

namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, MailerInterface $mailer): Response
    {

      $form=  $this->createForm(ContactType::class);
    // recuperer les données
    $form->handleRequest($request);


    if ($form->isSubmitted() && $form->isValid()) {
     
    $data = $form->getData();
            // dd($data);
            $adress = $data['email'];
             $content = $data['content'];
     $email = (new Email())
            ->from($adress)
            ->to('erinewam@gmail.com')
            ->subject('Demande de contact')
            ->text($content);

     $mailer->send($email);

    }
        

        return $this->render('contact/index.html.twig', [
            'controller_name' => 'ContactController',
            'formulaire' => $form,
        ]);
    }
}