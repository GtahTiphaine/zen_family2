<?php
namespace App\Controller;


use App\Entity\Bach;
use App\Form\EmotionType;
use App\Repository\BachRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BachController extends AbstractController
{

    /**
     * @Route("/", name="app_bach")
     * @return Response A response instance
     */
    public function show(Request $request): Response
    {
        $createB = new bach();
        $form = $this->createForm(EmotionType::class, $createB);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $emotion=$request->request->get('emotions');

            if (!$emotion == null)  {
                $this->getDoctrine()->getRepository(Bach::class)->findBy(
                    [
                        'emotions' => $emotion,
                    ]
                );
            }
            }

            return $this->render(
                'bach.html.twig',
                [
                    'form' => $form->createView(),

                ]
            );
        }


}
