<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DestinationController extends AbstractController
{
    #[Route('/destination', name: 'app_destination')]
    public function index(): Response
    {
        // Exemple de données dynamiques pour la destination
        $destination = [
            'name' => 'Les Maldives',
            'description' => 'Un paradis tropical connu pour ses plages, ses lagons bleus et ses récifs coralliens.',
            'activities' => ['Plongée sous-marine', 'Snorkeling', 'Croisières', 'Pêche', 'Relaxation sur la plage'],
            'images' => ['images-maldives.jpg', 'background_blue.jpg']
        ];

        // Transmettez la variable 'destination' à la vue Twig
        return $this->render('destination/index.html.twig', [
            'destination' => $destination,
        ]);
    }
}