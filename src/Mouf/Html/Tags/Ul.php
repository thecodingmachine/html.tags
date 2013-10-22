<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;ul&gt; tag in HTML.
 * The &lt;ul&gt; element represents the unordered list. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Ul implements HtmlElementInterface {
	use ChildrenTrait {
		ChildrenTrait::setChildren as tmpSetChildren;
	}
	use GlobalAttributesTrait;
	
	/**
	 * Sets the list of children of this element.
	 * 
	 * @param Li[]|HtmlElementInterface[] $children
	 * @return $this
	 */
	public function setChildren(array $children) {
		$this->setChildrenTrue($children);
	}
	
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<ul '.$this->getAttributes().'>'.$this->renderChildren().'</ul>';
	}
}