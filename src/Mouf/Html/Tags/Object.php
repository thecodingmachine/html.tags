<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;object&gt; tag in HTML.
 * The &lt;object&gt; element represents can represent an external resource, which, depending on the type of the resource, will either be treated as an image, as a nested browsing context, or as an external resource to be processed by a plugin.
 * Point
 * 
 *     Example of external resource:
 *         Flash contents [Example A]
 *         Java applet [Example B]
 *         HTML [Example C] ... 
 * 
 * 
 * Accessibility
 * 
 * Authors should ensure that the information and user interface components must be presentable to users in ways they can perceive (WCAG 2.0 - Principle 1: Perceivable). This includes providing alternatives for time-based media Guideline 1.2. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Object implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 *     Specifies the address of the resource. 
	 * 
	 * 
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getData() {
		return $this->attributes['data'];
	}
	
	/**
	 *     Specifies the address of the resource. 
	 * 
	 * 
	 * 
	 * 
	 * @param string|ValueInterface $data
	 * @return static
	 */
	public function setData($data) {
		$this->attributes['data'] = $data;
		return $this;
	}
    /**
	 * Specifies the type of the resource. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getType() {
		return $this->attributes['type'];
	}
	
	/**
	 * Specifies the type of the resource. 
	 * 
	 * @param string|ValueInterface $type
	 * @return static
	 */
	public function setType($type) {
		$this->attributes['type'] = $type;
		return $this;
	}
    /**
	 * Gives the name of the input element. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getName() {
		return $this->attributes['name'];
	}
	
	/**
	 * Gives the name of the input element. 
	 * 
	 * @param string|ValueInterface $name
	 * @return static
	 */
	public function setName($name) {
		$this->attributes['name'] = $name;
		return $this;
	}
    /**
	 * Specifies a hash-name reference to a map element with which to associate the object. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getUsemap() {
		return $this->attributes['usemap'];
	}
	
	/**
	 * Specifies a hash-name reference to a map element with which to associate the object. 
	 * 
	 * @param string|ValueInterface $usemap
	 * @return static
	 */
	public function setUsemap($usemap) {
		$this->attributes['usemap'] = $usemap;
		return $this;
	}
    /**
	 * Associate the object element with its form owner. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getForm() {
		return $this->attributes['form'];
	}
	
	/**
	 * Associate the object element with its form owner. 
	 * 
	 * @param string|ValueInterface $form
	 * @return static
	 */
	public function setForm($form) {
		$this->attributes['form'] = $form;
		return $this;
	}
    /**
	 * Give the width of the visual content of the element, in CSS pixels. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getWidth() {
		return $this->attributes['width'];
	}
	
	/**
	 * Give the width of the visual content of the element, in CSS pixels. 
	 * 
	 * @param string|ValueInterface $width
	 * @return static
	 */
	public function setWidth($width) {
		$this->attributes['width'] = $width;
		return $this;
	}
    /**
	 * Give the height of the visual content of the element, in CSS pixels. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getHeight() {
		return $this->attributes['height'];
	}
	
	/**
	 * Give the height of the visual content of the element, in CSS pixels. 
	 * 
	 * @param string|ValueInterface $height
	 * @return static
	 */
	public function setHeight($height) {
		$this->attributes['height'] = $height;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<object '.$this->getAttributes().'>'.$this->renderChildren().'</object>';
	}
}