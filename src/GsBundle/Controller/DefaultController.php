<?php

namespace GsBundle\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Attribute\AttributeBag;
use Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorage;
use AppBundle\AppBundle;
use GsBundle\Entity\Score;

class DefaultController extends Controller
{

    public function indexAction()
    {
        $score = 0;
        $id = $this->getUser()->getId();
        return $this->render('Default/index.html.twig');
    }


    public function additionParTrouAction(Request $request)
    {
        $score = $request->get('score');
        $score =  intval($score);
        $request->attributes->set('score', $score);
        $id = $this->getUser()->getId();
        return $this->render('@Gs/Default/additiontrou.html.twig',array('score'=>$score));
    }


    public function calculateAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $score = $request->get('score');
        $score =  intval($score);
        $id = $this->getUser();
        $entity = new Score();
        $entity->setScore($score);
        $entity->setUser($id);
        $em->persist($entity);
        $em->flush();
        return new Response ("ok");
    }


    public function scoresAction()
    {
        $em = $this->getDoctrine()->getManager();
        $id = $this->getUser();
        $scores = $em->getRepository(Score::class)->findBy(array('user'=> $id));  
        return $this->render('@Gs/Default/scores.html.twig',array('scores'=>$scores));
    }

    public function deleteAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $score = $em->getRepository(Score::class)->find($id);
        $em->remove($score);
        $em->flush();
        return $this->redirectToRoute('scores');
    }


    public function soustractionAction(Request $request)
    {
        //$request->request->set()
        $id = $this->getUser()->getId();
        return $this->render('@Gs/Default/soustraction.html.twig');
    }


    public function comparerpartroisAction()
    {
        $id = $this->getUser()->getId();
        return $this->render('@Gs/Default/comparerpar3.html.twig',array('id'=>$id));
    }


    public function moinsplusAction()
    {
        $id = $this->getUser()->getId();
        return $this->render('@Gs/Default/moinsplus.html.twig',array('id'=>$id));
    }


    public function compterdeuxAction()
    {
        $id = $this->getUser()->getId();
        return $this->render('@Gs/Default/compterdeux.html.twig',array('id'=>$id));
    }

    public function comparerlongueursAction()
    {
        $id = $this->getUser()->getId();
        return $this->render('@Gs/Default/grandeurs/comparerlongueurs.html.twig',array('id'=>$id));
    }

    public function jourssemainesAction()
    {
        $id = $this->getUser()->getId();
        return $this->render('@Gs/Default/grandeurs/nbjours.html.twig',array('id'=>$id));
    }

    public function moisanneesAction()
    {
        $id = $this->getUser()->getId();
        return $this->render('@Gs/Default/grandeurs/moisannee.html.twig',array('id'=>$id));
    }

    public function liretemperatureAction()
    {
        $id = $this->getUser()->getId();
        return $this->render('@Gs/Default/grandeurs/liretemperature.html.twig',array('id'=>$id));
    }

    public function mesurerlongueursAction()
    {
        $id = $this->getUser()->getId();
        return $this->render('@Gs/Default/grandeurs/mesurerregle.html.twig',array('id'=>$id));
    }

    public function recsolidesAction()
    {
        $id = $this->getUser()->getId();
        return $this->render('@Gs/Default/espace/solides.html.twig',array('id'=>$id));
    }

    public function planesAction()
    {
        $id = $this->getUser()->getId();
        return $this->render('@Gs/Default/espace/planes.html.twig',array('id'=>$id));
    }



}


