<?php

namespace API\Controller;

use Zend\Http\Response;
use Zend\View\Model\JsonModel;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\ViewModel;
use Doctrine\ORM\Query;


class SkillController extends AbstractRestfulController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function getList()
    {
        $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');

        $skills = $em->getRepository('API\Entity\Skill')
            ->createQueryBuilder('e')
            ->select('e')
            ->getQuery()
            ->getResult(Query::HYDRATE_ARRAY);

        return new JsonModel($skills);
    }

//    public function get($id)
//    {
//        return new JsonModel(
//            array('title' => 'Test', 'proficiency' => 1)
//        );
//    }


}