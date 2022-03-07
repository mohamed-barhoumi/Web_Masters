<?php

namespace App\Controller;

use App\Entity\Avis;
use App\Form\Avis1Type;
use App\Repository\AvisRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/af")
 */
class AfController extends AbstractController
{
    /**
     * @Route("/", name="af_index", methods={"GET"})
     */
    public function index(AvisRepository $avisRepository): Response
    {
        return $this->render('af/index.html.twig', [
            'avis' => $avisRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="af_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $avi = new Avis();
        $form = $this->createForm(Avis1Type::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($avi);
            $entityManager->flush();

            return $this->redirectToRoute('af_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('af/new.html.twig', [
            'avi' => $avi,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="af_show", methods={"GET"})
     */
    public function show(Avis $avi): Response
    {
        
        return $this->render('af/show.html.twig', [
            'avi' => $avi,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="af_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Avis $avi): Response
    {
        $form = $this->createForm(Avis1Type::class, $avi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('af_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('af/edit.html.twig', [
            'avi' => $avi,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="af_delete", methods={"POST"})
     */
    public function delete(Request $request, Avis $avi): Response
    {
        if ($this->isCsrfTokenValid('delete'.$avi->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($avi);
            $entityManager->flush();
        }

        return $this->redirectToRoute('af_index', [], Response::HTTP_SEE_OTHER);
    }
}
