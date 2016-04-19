<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;

class PostmanController extends FOSRestController {
    /**
     * @Route("/postman.{_format}", name="get_postman")
     * @Method({"GET"})
     */
    public function postmanAction() 
    {
		$postmans = $this->getDoctrine()->getRepository('AppBundle:Postman')->findAll();
        if (!$postmans) {
            throw $this->createNotFoundException(
                'No postmans found.'
            );
        }

        $postmansarray = array();
        
        foreach($postmans as $onePostman) {
            $postman['id'] = $onePostman->getId();
            $postman['first_name'] = $onePostman->getFirstName();
            $postman['last_name'] = $onePostman->getLastName();
            $postman['phone'] = $onePostman->getPhone();
            $postman['email'] = $onePostman->getEmail();
            $postman['city'] = $onePostman->getCity();
            
            array_push($postmansarray, $postman);
        }


        return new JsonResponse($postmansarray);
	}
    
    /**
     * @Route("/postman.{_format}", name="post_postman")
     * @Method({"POST"})
     */
    public function postPostmanAction(Request $request) {
        try {
            $newPostman = $this->container->get('postman_form.handler')->post($request->request->all());
            $routeOptions = array(
                'id' => $newPostman->getId(),
                '_format' => $request->get('_format')
            );
            return $this->routeRedirectView('get_postman', $routeOptions, Response::HTTP_CREATED);
        } catch (InvalidFormException $exception) {
            return array('form' => $exception->getForm());
        }
 }
}