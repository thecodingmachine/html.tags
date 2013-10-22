<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;embed&gt; tag in HTML.
 * The &lt;embed&gt; element represents an integration point for an external (typically non-HTML) application or interactive content.
 * Accessibility
 * 
 * Authors should ensure that the information and user interface components must be presentable to users in ways they can perceive (WCAG 2.0 - Principle 1: Perceivable). This includes providing alternatives for time-based media Guideline 1.2.
 * 
 * 
 * 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Embed implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * gives the address of the resource being embedded. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getSrc() {
		return $this->attributes['src'];
	}
	
	/**
	 * gives the address of the resource being embedded. 
	 * 
	 * @param string|ValueInterface $src
	 * @return static
	 */
	public function setSrc($src) {
		$this->attributes['src'] = $src;
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
		echo '<embed '.$this->getAttributes().'>'.$this->renderChildren().'</embed>';
	}
}