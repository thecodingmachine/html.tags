<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;button&gt; tag in HTML.
 * The &lt;button&gt; element represents a button. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Button implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * submit/ reset/ button
	 * The missing value default is the Submit Button state.
	 * 
	 * @return string|ValueInterface
	 */
	public function getType() {
		return $this->attributes['type'];
	}
	
	/**
	 * submit/ reset/ button
	 * The missing value default is the Submit Button state.
	 * 
	 * @param string|ValueInterface $type
	 * @return static
	 */
	public function setType($type) {
		$this->attributes['type'] = $type;
		return $this;
	}
    /**
	 * boolean
	 * Allows the author to indicate that a control is to be focused as soon as the page is loaded
	 * 
	 * @return string|ValueInterface
	 */
	public function getAutofocus() {
		return $this->attributes['autofocus'];
	}
	
	/**
	 * boolean
	 * Allows the author to indicate that a control is to be focused as soon as the page is loaded
	 * 
	 * @param string|ValueInterface $autofocus
	 * @return static
	 */
	public function setAutofocus($autofocus) {
		$this->attributes['autofocus'] = $autofocus;
		return $this;
	}
    /**
	 *     boolean
	 *     If present, make the control non-interactive and to prevent its value from being submitted. 
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
	 *     If present, make the control non-interactive and to prevent its value from being submitted. 
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
	 * the ID of a form element in the element's owner
	 * Associate the button element with its form owner.
	 * By default, the button element is associated with its nearest ancestor form element.
	 * 
	 * @return string|ValueInterface
	 */
	public function getForm() {
		return $this->attributes['form'];
	}
	
	/**
	 * the ID of a form element in the element's owner
	 * Associate the button element with its form owner.
	 * By default, the button element is associated with its nearest ancestor form element.
	 * 
	 * @param string|ValueInterface $form
	 * @return static
	 */
	public function setForm($form) {
		$this->attributes['form'] = $form;
		return $this;
	}
    /**
	 * unique name
	 * Represents the element's name. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getName() {
		return $this->attributes['name'];
	}
	
	/**
	 * unique name
	 * Represents the element's name. 
	 * 
	 * @param string|ValueInterface $name
	 * @return static
	 */
	public function setName($name) {
		$this->attributes['name'] = $name;
		return $this;
	}
    /**
	 * element's value
	 * Gives the element's value for the purposes of form submission. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getValue() {
		return $this->attributes['value'];
	}
	
	/**
	 * element's value
	 * Gives the element's value for the purposes of form submission. 
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
		echo '<button '.$this->getAttributes().'>'.$this->renderChildren().'</button>';
	}
}