<?php

namespace app\resources\repository;

use app\models as Model;

class UserRepository extends \Doctrine\ORM\EntityRepository
{
    public function getLastUser() {
        //User::getLastUser();
    }
    public function searchUser($filters){
        //var_dump($filters);
		
		$search = array();

        $and = array('and' => array(
					array('email' => array('like' => (string)$filters['email']))));
        //$or = array('or'=> $email);
        $leftJoin = array(
					array('field'=>'type',
						'where'=>array(
							array('user_type'=>array(
							'eq'=>$filters['type'])
							)
						)
					));

		if ($filters['email']!==""){
			$search['where'] = $and;
		}
        if ($filters['type']!==""){
			$search['leftJoin'] = $leftJoin;			
		}
        $searchType = Model\User::findAll($search
		/*array(
            'where' =>array(
                'and' => array(
                    array('email' => array('like' => '%@gmail.com%'))

                    //array('active' => array('eq' => '1')),
                ),
                'or' => array(
                    //array('email' => array('like' => 'x%')),
                )
            
            ),
            
        )*/
		);
        return $searchType;
    }
}

?>
