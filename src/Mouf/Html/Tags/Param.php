<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;

/**
 * A &lt;param&gt; tag in HTML.
 * The &lt;param&gt; element defines parameters for plugins invoked by object elements.
 * Point
 * 
 *     It does not represent anything on its own. 
 * 
 *     The name attribute and the value attribute must be present. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Param implements HtmlElementInterface {
	use GlobalAttributesTrait;

    /**
	 * Gives the name of the parameter.
	 * This attribute must be present. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getName() {
		return isset($this->attributes['name'])?$this->attributes['name']:null;
	}
	
	/**
	 * Gives the name of the parameter.
	 * This attribute must be present. 
	 * 
	 * @param string|ValueInterface $name
	 * @return static
	 */
	public function setName($name) {
		$this->attributes['name'] = $name;
		return $this;
	}
    /**
	 * Gives the value of the parameter.
	 * This attribute must be present. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getValue() {
		return isset($this->attributes['value'])?$this->attributes['value']:null;
	}
	
	/**
	 * Gives the value of the parameter.
	 * This attribute must be present. 
	 * 
	 * @param string|ValueInterface $value
	 * @return static
	 */
	public function setValue($value) {
		$this->attributes['value'] = $value;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<param '.$this->getAttributes().'/>';
	}
}