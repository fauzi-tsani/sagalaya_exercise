<?php

namespace app\models;

/**
 * @Entity(repositoryClass="app\resources\repository\ProfileRepository")
 * @HasLifecycleCallbacks
 * @Table(name="Profile")
 */
class Profile extends \sagalaya\extensions\data\Model
{

    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    protected $id = null;

    /**
     * @Column(type="string", length=255)
     */
    protected $fullname = null;

    /**
     * @Column(type="string", length=255)
     */
    protected $address = null;

    /**
     * @Column(type="integer", length=25)
     */
    protected $phone = null;

    protected $validations = array(
        'address' => array(array(
                'notEmpty',
                'message' => 'address can\'t be empty'
                )),
        'phone' => array(array(
                'notEmpty',
                'message' => 'phone can\'t be empty'
                ))
        );

    /**
     * @PrePersist
     */
    public function beforePersist()
    {
        $this->created = new \DateTime();
        $this->phone = (int)$this->phone;
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
