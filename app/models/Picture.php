<?php

namespace app\models;

/**
 * @Entity(repositoryClass="app\resources\repository\PictureRepository")
 * @HasLifecycleCallbacks
 * @Table(name="pictures")
 */
class Picture extends \sagalaya\extensions\data\Model
{

    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    protected $id = null;

    /**
     * @Column(type="string", length=255)
     */
    protected $url = null;

    protected $validations = array('url' => array(array(
                'notEmpty',
                'message' => 'url image can\'t be empty'
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