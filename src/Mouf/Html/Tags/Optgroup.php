<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;optgroup&gt; tag in HTML.
 * The &lt;optgroup&gt; element represents a group of option elements with a common label.
 * Point
 * 
 *     The label attribute must be specified.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Optgroup implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 *     boolean
	 *     if present, disable a group of option elements together. 
	 * 
	 * 
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getDisabled() {
		return $this->attributes['disabled'];
	}
	
	/**
	 *     boolean
	 *     if present, disable a group of option elements together. 
	 * 
	 * 
	 * 
	 * 
	 * @param string|ValueInterface $disabled
	 * @return static
	 */
	public function setDisabled($disabled) {
		$this->attributes['disabled'] = $disabled;
		return $this;
	}
    /**
	 * Its value gives the name of the group, for the purposes of the user interface. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getLabel() {
		return $this->attributes['label'];
	}
	
	/**
	 * Its value gives the name of the group, for the purposes of the user interface. 
	 * 
	 * @param string|ValueInterface $label
	 * @return static
	 */
	public function setLabel($label) {
		$this->attributes['label'] = $label;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<optgroup '.$this->getAttributes().'>'.$this->renderChildren().'</optgroup>';
	}
}