<?php

namespace API\Controller;

use Exception;
use Zend\EventManager\EventManagerInterface;
use Zend\Http\Response;
use Zend\View\Model\JsonModel;
use Zend\Mvc\Controller\AbstractRestfulController;

class SkillController extends AbstractRestfulController
{

    public function getList()
    {
//        $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');
//        $skills = $em->getRepository('Entity\Skills')->getSkills();
//
//        return array('data' => $skills);
        return new JsonModel(array(
            array('title' => 'Test', 'proficiency' => 1),
            array('title' => 'Test', 'proficiency' => 1)
        ));
    }

    public function get($id)
    {
        return new JsonModel(
            array('title' => 'Test', 'proficiency' => 1)
        );
    }


}