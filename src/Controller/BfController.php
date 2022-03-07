<?php

namespace App\Controller;

use App\Entity\Blog;
use App\Entity\Avis;
use App\Form\Blog1Type;
use App\Repository\BlogRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityMangerInterface;
use App\Form\CommentType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
/**
 * @Route("/bf")
 */
class BfController extends AbstractController
{
    /**
     * @Route("/", name="bf_index", methods={"GET"})
     */
    public function index(BlogRepository $blogRepository): Response
    {
        return $this->render('bf/index.html.twig', [
            'blogs' => $blogRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="bf_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $blog = new Blog();
        $form = $this->createForm(Blog1Type::class, $blog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($blog);
            $entityManager->flush();

            return $this->redirectToRoute('bf_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('bf/new.html.twig', [
            'blog' => $blog,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="bf_show", methods={"GET","POST"})
     */

    public function show(Blog $blog,Request $request,EntityManagerInterface $manager): Response
    {
        $avis = new Avis();
        $form = $this->createForm(CommentType::class,$avis);
        $form->handleRequest($request);
        if ($form->isSubmitted()&&$form->isValid()){
            $avis->setLikeNumber(1)
                    ->setBlog($blog)
                    ->setRating(0.0);
            
            $manager->persist($avis);
            $manager->flush();

            return $this->redirectToRoute('bf_show',['id' =>$blog->getId()]);
        }
        return $this->render('bf/show.html.twig', [
            'blog' => $blog,
            'commentForm' => $form->createView()
        ]);
    }
    

    /**
     * @Route("/{id}/edit", name="bf_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Blog $blog): Response
    {
        $form = $this->createForm(Blog1Type::class, $blog);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('bf_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('bf/edit.html.twig', [
            'blog' => $blog,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="bf_delete", methods={"POST"})
     */
    public function delete(Request $request, Blog $blog): Response
    {
        if ($this->isCsrfTokenValid('delete'.$blog->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($blog);
            $entityManager->flush();
        }

        return $this->redirectToRoute('bf_index', [], Response::HTTP_SEE_OTHER);
    }

    
}
