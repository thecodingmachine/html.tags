<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;map&gt; tag in HTML.
 * The &lt;map&gt; element, in conjunction with any area element descendants, defines an image map.
 * Point
 * 
 *     An image, in the form of an img element or an object element representing an image, may be associated with an image map (in the form of a map element) by specifying a usemap attribute on the img or object element.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Map implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * Gives the map a name so that it can be referenced.
	 * The attribute must be present and must have a non-empty value with no space characters.
	 * The value of the name attribute must not be a compatibility-caseless match for the value of the name attribute of another map element in the same document.
	 * If the id attribute is also specified, both attributes must have the same value. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getName() {
		return isset($this->attributes['name'])?$this->attributes['name']:null;
	}
	
	/**
	 * Gives the map a name so that it can be referenced.
	 * The attribute must be present and must have a non-empty value with no space characters.
	 * The value of the name attribute must not be a compatibility-caseless match for the value of the name attribute of another map element in the same document.
	 * If the id attribute is also specified, both attributes must have the same value. 
	 * 
	 * @param string|ValueInterface $name
	 * @return static
	 */
	public function setName($name) {
		$this->attributes['name'] = $name;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<map '.$this->getAttributes().'>'.$this->renderChildren().'</map>';
	}
}