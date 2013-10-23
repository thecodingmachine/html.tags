<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;fieldset&gt; tag in HTML.
 * The &lt;fieldset&gt; element represents a set of form controls optionally grouped under a common name.
 * Point
 * 
 *     The name of the group is given by the first legend element that is a child of the fieldset element, if any. The remainder of the descendants form the group. 
 * 
 * 
 * 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Fieldset implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * When specified, causes all the form control descendants of the fieldset element, excluding those that are descendants of the fieldset element's first legend element child, if any, to be disabled. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getDisabled() {
		return isset($this->attributes['disabled'])?$this->attributes['disabled']:null;
	}
	
	/**
	 * When specified, causes all the form control descendants of the fieldset element, excluding those that are descendants of the fieldset element's first legend element child, if any, to be disabled. 
	 * 
	 * @param string|ValueInterface $disabled
	 * @return static
	 */
	public function setDisabled($disabled) {
		$this->attributes['disabled'] = $disabled;
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
	 * Represents the element's name. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getName() {
		return isset($this->attributes['name'])?$this->attributes['name']:null;
	}
	
	/**
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
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<fieldset '.$this->getAttributes().'>'.$this->renderChildren().'</fieldset>';
	}
}