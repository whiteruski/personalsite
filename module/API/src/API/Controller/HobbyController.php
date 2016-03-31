<?php

namespace API\Controller;

use Zend\Http\Response;
use Zend\View\Model\JsonModel;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\ViewModel;
use Doctrine\ORM\Query;


class HobbyController extends AbstractRestfulController
{
    public function indexAction()
    {
        return new ViewModel();
    }

    public function getList()
    {
        $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');

        $skills = $em->getRepository('API\Entity\Hobby')
            ->createQueryBuilder('e')
            ->select('e')
            ->getQuery()
            ->getResult(Query::HYDRATE_ARRAY);

        return new JsonModel($skills);
    }

}