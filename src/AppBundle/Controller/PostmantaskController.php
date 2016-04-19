<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class PostmantaskController extends FOSRestController
{
    /**
     * @Route("/postmantask.{_format}", name="postmantask")
     * @Method({"GET"})
     */
    public function postmantaskAction() 
    {
		$postmantasks = $this->getDoctrine()->getRepository('AppBundle:PostmanTask')->findAll();

    if (!$postmantasks) {
        throw $this->createNotFoundException(
            'No postman tasks found.'
        );
    }

	$taskarray = array();
	
	foreach($postmantasks as $postmantask) {
	
    	$task['id'] = $postmantask->getId();
    	$postman = $this->getDoctrine()->getRepository('AppBundle:Postman')->find($postmantask->getPostman());
    	$task['postmanfirstname'] = $postman->getFirstName();
    	$task['postmanlastname'] = $postman->getLastName();
    	//$task['done'] = $postmantask->getDone();
    	
    	array_push($taskarray, $task);
	}

	return new JsonResponse($taskarray);
	}
}
