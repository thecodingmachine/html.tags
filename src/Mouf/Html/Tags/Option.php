<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;

/**
 * A &lt;option&gt; tag in HTML.
 * The &lt;option&gt; element represents an option in a select element or as part of a list of suggestions in a datalist element. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Option implements HtmlElementInterface {
	use GlobalAttributesTrait;

    /**
	 * boolean
	 * if present, disable a option. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getDisabled() {
		return $this->attributes['disabled'];
	}
	
	/**
	 * boolean
	 * if present, disable a option. 
	 * 
	 * @param string|ValueInterface $disabled
	 * @return static
	 */
	public function setDisabled($disabled) {
		$this->attributes['disabled'] = $disabled;
		return $this;
	}
    /**
	 * Provides a label for element.
	 * If there isn't, the label of an option element is the textContent of the element. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getLabel() {
		return $this->attributes['label'];
	}
	
	/**
	 * Provides a label for element.
	 * If there isn't, the label of an option element is the textContent of the element. 
	 * 
	 * @param string|ValueInterface $label
	 * @return static
	 */
	public function setLabel($label) {
		$this->attributes['label'] = $label;
		return $this;
	}
    /**
	 * Provides a value for element.
	 * If there isn't, the value of an option element is the textContent of the element. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getValue() {
		return $this->attributes['value'];
	}
	
	/**
	 * Provides a value for element.
	 * If there isn't, the value of an option element is the textContent of the element. 
	 * 
	 * @param string|ValueInterface $value
	 * @return static
	 */
	public function setValue($value) {
		$this->attributes['value'] = $value;
		return $this;
	}
    /**
	 * boolean
	 * Represents the default selectedness of the element.
	 * 
	 * @return string|ValueInterface
	 */
	public function getSelected() {
		return $this->attributes['selected'];
	}
	
	/**
	 * boolean
	 * Represents the default selectedness of the element.
	 * 
	 * @param string|ValueInterface $selected
	 * @return static
	 */
	public function setSelected($selected) {
		$this->attributes['selected'] = $selected;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<option '.$this->getAttributes().'>'.$this->renderChildren().'</option>';
	}
}