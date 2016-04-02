<?php

namespace API\Controller;

use Zend\Http\Response;
use Zend\View\Model\JsonModel;
use Zend\Mvc\Controller\AbstractRestfulController;
use Zend\View\Model\ViewModel;
use Doctrine\ORM\Query;


class ExperienceController extends AbstractRestfulController
{
    public function getList()
    {
        $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');

        $skills = $em->getRepository('API\Entity\Experience')
            ->createQueryBuilder('e')
            ->select('e')
            ->orderBy('e.id', 'DESC')
            ->getQuery()
            ->getResult(Query::HYDRATE_ARRAY);

        return new JsonModel($skills);
    }

}