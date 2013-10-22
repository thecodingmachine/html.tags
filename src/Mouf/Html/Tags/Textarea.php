<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;textarea&gt; tag in HTML.
 * The &lt;textarea&gt; element represents a multiline plain text edit control for the element's raw value. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Textarea implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

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
	 * valid non-negative integer
	 * specifies the expected maximum number of characters per line. by defult, it is 20.
	 * 
	 * @return string|ValueInterface
	 */
	public function getCols() {
		return $this->attributes['cols'];
	}
	
	/**
	 * valid non-negative integer
	 * specifies the expected maximum number of characters per line. by defult, it is 20.
	 * 
	 * @param string|ValueInterface $cols
	 * @return static
	 */
	public function setCols($cols) {
		$this->attributes['cols'] = $cols;
		return $this;
	}
    /**
	 * valid non-negative integer
	 * Specifies the number of lines to show. by defult, it is 2. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getRows() {
		return $this->attributes['rows'];
	}
	
	/**
	 * valid non-negative integer
	 * Specifies the number of lines to show. by defult, it is 2. 
	 * 
	 * @param string|ValueInterface $rows
	 * @return static
	 */
	public function setRows($rows) {
		$this->attributes['rows'] = $rows;
		return $this;
	}
    /**
	 * boolean
	 * If present, make the control non-interactive and to prevent its value from being submitted. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getDisabled() {
		return $this->attributes['disabled'];
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
	 * Associate the textarea element with its form owner.
	 * By default, the textarea element is associated with its nearest ancestor form element. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getForm() {
		return $this->attributes['form'];
	}
	
	/**
	 * the ID of a form element in the element's owner
	 * Associate the textarea element with its form owner.
	 * By default, the textarea element is associated with its nearest ancestor form element. 
	 * 
	 * @param string|ValueInterface $form
	 * @return static
	 */
	public function setForm($form) {
		$this->attributes['form'] = $form;
		return $this;
	}
    /**
	 *     sample value or a brief description of the expected format
	 *     Represents a hint (a word or short phrase) intended to aid the user with data entry.
	 *     The placeholder attribute should not be used as an alternative to a label. 
	 * 
	 * 
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getPlaceholder() {
		return $this->attributes['placeholder'];
	}
	
	/**
	 *     sample value or a brief description of the expected format
	 *     Represents a hint (a word or short phrase) intended to aid the user with data entry.
	 *     The placeholder attribute should not be used as an alternative to a label. 
	 * 
	 * 
	 * 
	 * 
	 * @param string|ValueInterface $placeholder
	 * @return static
	 */
	public function setPlaceholder($placeholder) {
		$this->attributes['placeholder'] = $placeholder;
		return $this;
	}
    /**
	 * boolean
	 * Control whether the text can be edited by the user or not. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getReadonly() {
		return $this->attributes['readonly'];
	}
	
	/**
	 * boolean
	 * Control whether the text can be edited by the user or not. 
	 * 
	 * @param string|ValueInterface $readonly
	 * @return static
	 */
	public function setReadonly($readonly) {
		$this->attributes['readonly'] = $readonly;
		return $this;
	}
    /**
	 * boolean
	 * When specified, the user will be required to enter a value before submitting the form. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getRequired() {
		return $this->attributes['required'];
	}
	
	/**
	 * boolean
	 * When specified, the user will be required to enter a value before submitting the form. 
	 * 
	 * @param string|ValueInterface $required
	 * @return static
	 */
	public function setRequired($required) {
		$this->attributes['required'] = $required;
		return $this;
	}
    /**
	 * soft/ hard
	 * 
	 *     soft
	 *     The Soft state indicates that the text in the textarea is not to be wrapped when it is submitted (though it can still be wrapped in the rendering).
	 *     hard
	 *     The Hard state indicates that the text in the textarea is to have newlines added by the user agent so that the text is wrapped when it is submitted.
	 *     If the element's wrap attribute is in the Hard state, the cols attribute must be specified. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getWrap() {
		return $this->attributes['wrap'];
	}
	
	/**
	 * soft/ hard
	 * 
	 *     soft
	 *     The Soft state indicates that the text in the textarea is not to be wrapped when it is submitted (though it can still be wrapped in the rendering).
	 *     hard
	 *     The Hard state indicates that the text in the textarea is to have newlines added by the user agent so that the text is wrapped when it is submitted.
	 *     If the element's wrap attribute is in the Hard state, the cols attribute must be specified. 
	 * 
	 * @param string|ValueInterface $wrap
	 * @return static
	 */
	public function setWrap($wrap) {
		$this->attributes['wrap'] = $wrap;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<textarea '.$this->getAttributes().'>'.$this->renderChildren().'</textarea>';
	}
}