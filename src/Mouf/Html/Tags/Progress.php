<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;progress&gt; tag in HTML.
 * The &lt;progress&gt; element represents the completion progress of a task.
 * Point
 * 
 *     the progress is a number in the range zero to a maximum, giving the fraction of work that has so far been completed. 
 * 
 * 
 *     The progress element is the wrong element to use for something that is just a gauge, as opposed to task progress. For instance, indicating disk space usage using progress would be inappropriate. Instead, the meter element is available for such use cases.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Progress implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * valid floating point numbers
	 * Specifies how much of the task has been completed.
	 * This attribute must have a value equal to or greater than zero, and less than or equal to the value of the max attribute. If the mux attribute is not present, the value attribute must have a value less than 1.0. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getValue() {
		return isset($this->attributes['value'])?$this->attributes['value']:null;
	}
	
	/**
	 * valid floating point numbers
	 * Specifies how much of the task has been completed.
	 * This attribute must have a value equal to or greater than zero, and less than or equal to the value of the max attribute. If the mux attribute is not present, the value attribute must have a value less than 1.0. 
	 * 
	 * @param string|ValueInterface $value
	 * @return static
	 */
	public function setValue($value) {
		$this->attributes['value'] = $value;
		return $this;
	}
    /**
	 * valid floating point numbers
	 * Specifies how much work the task requires in total.
	 * This attribute must have a value greater than zero. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getMax() {
		return isset($this->attributes['max'])?$this->attributes['max']:null;
	}
	
	/**
	 * valid floating point numbers
	 * Specifies how much work the task requires in total.
	 * This attribute must have a value greater than zero. 
	 * 
	 * @param string|ValueInterface $max
	 * @return static
	 */
	public function setMax($max) {
		$this->attributes['max'] = $max;
		return $this;
	}
    /**
	 *     the ID of a form element in the element's owner
	 *     Associate the progress element with its form owner.
	 *     By default, the progress element is associated with its nearest ancestor form element. 
	 * 
	 * 
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getForm() {
		return isset($this->attributes['form'])?$this->attributes['form']:null;
	}
	
	/**
	 *     the ID of a form element in the element's owner
	 *     Associate the progress element with its form owner.
	 *     By default, the progress element is associated with its nearest ancestor form element. 
	 * 
	 * 
	 * 
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
		echo '<progress '.$this->getAttributes().'>'.$this->renderChildren().'</progress>';
	}
}