<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\JsonResponse;

class PostmanTravelController extends FOSRestController
{

    public function getPostmanTravelAction()
    {
        return $this->getDoctrine()->getRepository('AppBundle:PostmanTravel')
            ->findAllOrderedById();
    }

    public function postPostmanTravelAction(Request $request)
    {
        try{
            $newPostmantravel = $this->container->get('postmantravel_form.handler')
                ->post($request->request->all());
            $routeOptions = array(
                'id' => $newPostmantravel->getId(),
                '_format' => $request->get('_format')
            );
                return $this->routeRedirectView('get_postmantravel', $routeOptions, Response::HTTP_CREATED);
        } catch (InvalidFormException $exception) {
            return array('form' => $exception->getForm());
        }
    }
}
