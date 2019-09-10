<?php
namespace App\Controller;


use App\Entity\Bach;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BachController extends AbstractController
{

    /**
     * @param $emotion
     * @return Response
     * @Route("bach", name="app_bach")
     */

    public function index($emotion):Response
    {

        $display = $emotion;
        $emotion = $this->getDoctrine()
            ->getRepository(Bach::class)
            ->findBy($emotion);

        if (!$emotion) {
            throw $this->createNotFoundException(
                'No product found for id '
            );
        }

        return $this->render(
            'bach.html.twig',
            ['bachs' => $emotion]
        );

    }
}
