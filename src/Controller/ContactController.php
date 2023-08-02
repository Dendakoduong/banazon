<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Service\Mail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(Request $request): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->addFlash('notice', 'Message sent. Thank you for contacting us.');
            $datas = $form->getData();
            $content = "From : {$datas['firstname']} {$datas['lastname']} <br> Message : {$datas['content']} <br> Email: {$datas['email']}";
            $mail = new Mail();
            $mail->send('tutabs00244@fpt.edu.vn', 'Banazon', 'Banazon Support', $content);
        }

        return $this->renderForm('contact/index.html.twig', [
            'form' => $form,
        ]);
    }
}
