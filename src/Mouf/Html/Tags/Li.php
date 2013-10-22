<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;li&gt; tag in HTML.
 * The &lt;li&gt; element represents a list of items.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Li implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;
	
	/**
	 * Specifies the ordinal value of the list item.
	 * The value attribute can be used when the parent element in only a ol element.
	 * 
	 * @return int
	 */
	public function getValue() {
		return $this->attributes['value'];
	}
	
	/**
	 * Specifies the ordinal value of the list item.
	 * The value attribute can be used when the parent element in only a ol element.
	 * 
	 * @param int $value
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
		echo '<li '.$this->getAttributes().'>'.$this->renderChildren().'</li>';
	}
}