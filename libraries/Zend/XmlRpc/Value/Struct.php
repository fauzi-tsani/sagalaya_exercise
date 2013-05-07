<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 * @package   Zend_XmlRpc
 */

namespace Zend\XmlRpc\Value;

/**
 * @category   Zend
 * @package    Zend_XmlRpc
 * @subpackage Value
 */
class Struct extends AbstractCollection
{
    /**
     * Set the value of an struct native type
     *
     * @param array $value
     */
    public function __construct($value)
    {
        $this->_type = self::XMLRPC_TYPE_STRUCT;
        parent::__construct($value);
    }


    /**
     * Generate the XML code that represent struct native MXL-RPC value
     *
     * @return void
     */
    protected function _generateXML()
    {
        $generator = $this->getGenerator();
        $generator->openElement('value')
                  ->openElement('struct');

        if (is_array($this->_value)) {
            foreach ($this->_value as $name => $val) {
                $generator->openElement('member')
                          ->openElement('name', $name)
                          ->closeElement('name');
                $val->generateXml();
                $generator->closeElement('member');
            }
        }
        $generator->closeElement('struct')
                  ->closeElement('value');
    }
}