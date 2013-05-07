<?php

namespace app\models;
use sagalaya\extensions\security\Auth;
/**
 * @Entity(repositoryClass="app\resources\repository\PostRepository")
 * @HasLifecycleCallbacks
 * @Table(name="posts")
 */
class Post extends \sagalaya\extensions\data\Model
{

    /**
     * @Id @Column(type="integer") @GeneratedValue
     */
    protected $id = null;

    /**
     * @Column(type="string", length=64)
     */
    protected $title = null;

    /**
     * @Column(type="text")
     */
    protected $content = null;

    /**
     * @OneToOne(targetEntity="User", cascade={"persist","remove"})
     */
    protected $user = null;

    protected $validations = array(
        'title' => array(array(
                'notEmpty',
                'message' => 'title can\'t be empty'
                )),
        'user' => array(array(
                'notEmpty',
                'message' => 'you have to login'
                ))
        );

    /**
     * @PrePersist
     */
    public function beforePersist()
    {
        $this->created = new \DateTime();
		//$session = Auth::check('default');
		//$this->user = $session->id;
		//var_dump($this->user);
		//$this->save();
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
