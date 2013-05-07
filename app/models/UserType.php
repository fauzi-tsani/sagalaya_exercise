<?php

namespace app\models;

/**
 * @Entity(repositoryClass="app\resources\repository\UserTypeRepository")
 * @HasLifecycleCallbacks
 * @Table(name="usertypes")
 */
class UserType extends \sagalaya\extensions\data\Model
{

    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    protected $id = null;

    /**
     * @Column(type="string", length=255)
     */
    protected $user_type = null;

    protected $validations = array('user_type' => array(array(
                'notEmpty',
                'message' => 'user type can\'t be empty'
                )));

    /**
     * @PrePersist
     */
    public function beforePersist()
    {
        $this->created = new \DateTime();
    }

    /**
     * @PreUpdate
     */
    public function beforeUpdate()
    {
        $this->modified = new \DateTime();
    }


}

?>