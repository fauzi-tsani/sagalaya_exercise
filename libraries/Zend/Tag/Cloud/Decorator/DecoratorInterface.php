<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_Tag
 */

namespace Zend\Tag\Cloud\Decorator;

/**
 * Interface for decorators
 *
 * @category   Zend
 * @package    Zend_Tag
 * @subpackage Cloud
 */
interface DecoratorInterface
{
    /**
     * Constructor
     *
     * Allow passing options to the constructor.
     *
     * @param  mixed $options
     * @return void
     */
    public function __construct($options = null);

    /**
     * Render a list of tags
     *
     * @param  mixed $tags
     * @return string
     */
    public function render($tags);
}
