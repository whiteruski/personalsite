<?php

namespace API\Controller;

use Zend\Http\Response;
use Zend\View\Model\JsonModel;
use Zend\Mvc\Controller\AbstractRestfulController;
use Doctrine\ORM\Query;


class LanguageController extends AbstractRestfulController
{
    public function getList()
    {
        $em = $this->getServiceLocator()->get('doctrine.entitymanager.orm_default');

        $results = $em->getRepository('API\Entity\Language')
            ->createQueryBuilder('e')
            ->select('e')
            ->getQuery()
            ->getResult(Query::HYDRATE_ARRAY);

        return new JsonModel($results);
    }


}