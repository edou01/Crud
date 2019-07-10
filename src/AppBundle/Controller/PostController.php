<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Post;
//use Doctrine\DBAL\Types\TextType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
//use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;

class PostController extends Controller
{
    /**
     * @Route("/post", name="view_posts_route")
     */
    public function showAllPostAction(Request $request)
    {
        // replace this example code with whatever you need
        $posts = $this->getDoctrine()->getRepository('AppBundle:Post')->findAll();

        return $this->render('pages/index.html.twig', ['posts'=> $posts]);
    }

    /**
     * @Route("/create", name="create_post_route")
     */
    public function createPostAction(Request $request)
    {
        $post = new Post;
        $form = $this->createFormBuilder($post)
            ->add('title', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('description', TextareaType::class, array('attr' => array('class' => 'form-control')))
            ->add('category', TextType::class, array('attr' => array('class' => 'form-control')))
            ->add('save', SubmitType::class, array('label' => 'Create Post', 'attr' => array('class' => 'btn 
            btn-primary' , 'style' => 'margin-top:10px')))
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $title = $form['title']->getData();
            $description = $form['description']->getData();
            $category = $form['category']->getData();

            $post->setTitle($title);
            $post->setDescription($description);
            $post->setCategory($category);

            $em = $this->getDoctrine()->getManager();
            $em->persist($post);
            $em->flush();

            $this->addFlash('message','Post Created Successfully');
            return $this->redirectToRoute('view_posts_route');

        }
        return $this->render('pages/create.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/view/{id}", name="view_post_route")
     */
    public function viewPostAction($id)
    {

        // replace this example code with whatever you need
        return $this->render('pages/view.html.twig');
    }



    /**
     * @Route("/edit/{id}", name="edit_post_route")
     */
    public function editPostAction($id)
    {

        // replace this example code with whatever you need
        return $this->render('pages/edit.html.twig');
    }

    /**
     * @Route("/delete/{id}", name="delete_post_route")
     */
    public function deletePostAction($id)
    {
// récupérer un seul article depuis la base de données
        $em = $this->getDoctrine()->getManager();
        $form = $em->getRepository("AppBundle:Post")->find($id);

        // supprimer une entité
        if ($form != null) {
            $em->remove($form);
            $em->flush();
        }
        //return new Response("Article bien supprimé");
        // replace this example code with whatever you need
        return $this->render('pages/delete.html.twig');
    }
}
