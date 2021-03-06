<?php

namespace app\models;

/**
 * @Entity(repositoryClass="app\resources\repository\UserRepository")
 * @HasLifecycleCallbacks
 * @Table(name="users")
 */
class User extends \sagalaya\extensions\data\Model implements \Zend\Acl\Resource\ResourceInterface, \Zend\Acl\Role\RoleInterface
{

    /**
     * @Id @Column(type="string", length=36) @GeneratedValue(strategy="UUID")
     */
    protected $id = null;

    /**
     * @Column(type="string", length=64, unique=true)
     */
    protected $email = null;

    /**
     * @Column(type="string")
     */
    protected $password = null;

    /**
     * @Column(type="boolean")
     */
    protected $active = false;

    /**
     * @OneToOne(targetEntity="Profile", cascade={"persist","remove"})
     */
    protected $profile = null;

    /**
     * @OneToOne(targetEntity="UserType", cascade={"persist","remove"})
     */
    protected $type = null;

    /**
     * @OneToOne(targetEntity="Picture", cascade={"persist","remove"})
     */
    protected $pictures = null;

    /**
     * @Column(type="string", nullable=true)
     */
    protected $hashCode = null;

    /**
     * @Column(type="datetime")
     */
    protected $created = null;

    /**
     * @Column(type="datetime", nullable=true)
     */
    protected $modified = null;

    protected $validations = array(
        'email' => array(
            array(
                'notEmpty',
                'message' => 'Email can\'t be empty'
                ),
            array(
                'email',
                'message' => 'Email format is not correct'
                ),
            array(
                'unique',
                'message' => 'Email has been taken, try other email'
                )
            ),
        'password' => array(
            array(
                'notEmpty',
                'message' => 'Password can\'t be empty'
                ),
            array(
                'lengthBetween',
                'message' => 'Password length must between 5-18 characters'
                )
            )
        );

    public function getResourceId()
    {
        return $this->id;
    }

    public function getRoleId()
    {
        return $this->id;
    }

    /**
     * @PrePersist
     */
    public function beforePersist()
    {
        $this->password = \lithium\util\String::hash($this->password);
        //$this->type = '1';
        $this->created = new \DateTime();
    }

    /**
     * @PreUpdate
     */
    public function beforeUpdate()
    {
        $this->modified = new \DateTime();
    }

    public function setCreated($date)
    {
        $this->created = (is_a($date, 'DateTime')) ? $date : new \DateTime($date);
    }

    public function setModified($date)
    {
        $this->modified = (is_a($date, 'DateTime')) ? $date : new \DateTime($date);
    }


}

?>
