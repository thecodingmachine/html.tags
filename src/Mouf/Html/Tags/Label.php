<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;label&gt; tag in HTML.
 * The &lt;label&gt; element represents a caption in a user interface.
 * Point
 * 
 *     The caption can be associated with a specific form control:
 *         Using for attribute
 *         By putting the form control inside the label element itself.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Label implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * Specified to indicate a form control with which the caption is to be associated.
	 * The attribute's value must be the ID of a labelable form-associated element in the same Document as the label element. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getFor() {
		return isset($this->attributes['for'])?$this->attributes['for']:null;
	}
	
	/**
	 * Specified to indicate a form control with which the caption is to be associated.
	 * The attribute's value must be the ID of a labelable form-associated element in the same Document as the label element. 
	 * 
	 * @param string|ValueInterface $for
	 * @return static
	 */
	public function setFor($for) {
		$this->attributes['for'] = $for;
		return $this;
	}
    /**
	 * Associate the fieldset element with its form owner. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getForm() {
		return isset($this->attributes['form'])?$this->attributes['form']:null;
	}
	
	/**
	 * Associate the fieldset element with its form owner. 
	 * 
	 * @param string|ValueInterface $form
	 * @return static
	 */
	public function setForm($form) {
		$this->attributes['form'] = $form;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<label '.$this->getAttributes().'>'.$this->renderChildren().'</label>';
	}
}