<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;select&gt; tag in HTML.
 * The &lt;select&gt; element represents a control for selecting amongst a set of options.
 * Point
 * 
 *     The list of options for a select element consists of all the option element children of the select element, and all the option element children of all the optgroup element children of the select element, in tree order. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Select implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * unique name
	 * Represents the element's name. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getName() {
		return isset($this->attributes['name'])?$this->attributes['name']:null;
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
	 * boolean
	 * Allows the author to indicate that a control is to be focused as soon as the page is loaded 
	 * 
	 * @return string|ValueInterface
	 */
	public function getAutofocus() {
		return isset($this->attributes['autofocus'])?$this->attributes['autofocus']:null;
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
	 * boolean
	 * If present, make the control non-interactive and to prevent its value from being submitted.
	 * 
	 * @return string|ValueInterface
	 */
	public function getDisabled() {
		return isset($this->attributes['disabled'])?$this->attributes['disabled']:null;
	}
	
	/**
	 * boolean
	 * If present, make the control non-interactive and to prevent its value from being submitted.
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
	 * Associate the select element with its form owner.
	 * By default, the select element is associated with its nearest ancestor form element. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getForm() {
		return isset($this->attributes['form'])?$this->attributes['form']:null;
	}
	
	/**
	 * the ID of a form element in the element's owner
	 * Associate the select element with its form owner.
	 * By default, the select element is associated with its nearest ancestor form element. 
	 * 
	 * @param string|ValueInterface $form
	 * @return static
	 */
	public function setForm($form) {
		$this->attributes['form'] = $form;
		return $this;
	}
    /**
	 * boolean
	 * If the attribute is present, then the select element represents a control for selecting zero or more options from the list of options.
	 * 
	 * @return string|ValueInterface
	 */
	public function getMultiple() {
		return isset($this->attributes['multiple'])?$this->attributes['multiple']:null;
	}
	
	/**
	 * boolean
	 * If the attribute is present, then the select element represents a control for selecting zero or more options from the list of options.
	 * 
	 * @param string|ValueInterface $multiple
	 * @return static
	 */
	public function setMultiple($multiple) {
		$this->attributes['multiple'] = $multiple;
		return $this;
	}
    /**
	 * boolean
	 * When specified, the user will be required to select a value before submitting the form. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getRequired() {
		return isset($this->attributes['required'])?$this->attributes['required']:null;
	}
	
	/**
	 * boolean
	 * When specified, the user will be required to select a value before submitting the form. 
	 * 
	 * @param string|ValueInterface $required
	 * @return static
	 */
	public function setRequired($required) {
		$this->attributes['required'] = $required;
		return $this;
	}
    /**
	 * valid non-negative intege
	 * Gives the number of options to show to the user.
	 * If the multiple attribute is present, then the size attribute's default value is 4. If the multiple attribute is absent, then the size attribute's default value is 1. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getSize() {
		return isset($this->attributes['size'])?$this->attributes['size']:null;
	}
	
	/**
	 * valid non-negative intege
	 * Gives the number of options to show to the user.
	 * If the multiple attribute is present, then the size attribute's default value is 4. If the multiple attribute is absent, then the size attribute's default value is 1. 
	 * 
	 * @param string|ValueInterface $size
	 * @return static
	 */
	public function setSize($size) {
		$this->attributes['size'] = $size;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<select '.$this->getAttributes().'>'.$this->renderChildren().'</select>';
	}
}