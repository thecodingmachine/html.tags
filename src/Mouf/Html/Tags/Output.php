<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;

/**
 * A &lt;output&gt; tag in HTML.
 * The &lt;output&gt; element represents the result of a calculation. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Output implements HtmlElementInterface {
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
	 * unordered set of unique space-separated tokens
	 * Allows an explicit relationship to be made between the result of a calculation and the elements that represent the values that went into the calculation or that otherwise influenced the calculation.
	 * This attribute must have the value of an ID of an element in the same Document.
	 * 
	 * @return string|ValueInterface
	 */
	public function getFor() {
		return $this->attributes['for'];
	}
	
	/**
	 * unordered set of unique space-separated tokens
	 * Allows an explicit relationship to be made between the result of a calculation and the elements that represent the values that went into the calculation or that otherwise influenced the calculation.
	 * This attribute must have the value of an ID of an element in the same Document.
	 * 
	 * @param string|ValueInterface $for
	 * @return static
	 */
	public function setFor($for) {
		$this->attributes['for'] = $for;
		return $this;
	}
    /**
	 * the ID of a form element in the element's owner
	 * Associate the output element with its form owner.
	 * By default, the output element is associated with its nearest ancestor form element. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getForm() {
		return $this->attributes['form'];
	}
	
	/**
	 * the ID of a form element in the element's owner
	 * Associate the output element with its form owner.
	 * By default, the output element is associated with its nearest ancestor form element. 
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
		echo '<output '.$this->getAttributes().'>'.$this->renderChildren().'</output>';
	}
}