<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;ol&gt; tag in HTML.
 * The &lt;ol&gt; element represents the ordered list.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Ol implements HtmlElementInterface {
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
		$this->tmpSetChildren($children);
	}
	
	/**
	 * Changes into the descending order list, if present.
	 * @return boolean
	 */
	public function isReversed() {
		return $this->attributes['reversed'];
	}
	
	/**
	 * Changes into the descending order list, if present.
	 * @param bool $reversed
	 * @return static
	 */
	public function setReversed($reversed) {
		$this->attributes['reversed'] = $reversed;
		return $this;
	}
	
	/**
	 * Specifies the ordinal value of the first list item.
	 * 
	 * @return int
	 */
	public function getStart() {
		return $this->attributes['start'];
	}
	
	/**
	 * Specifies the ordinal value of the first list item.
	 * 
	 * @param int $start
	 * @return static
	 */
	public function setStart($start) {
		$this->attributes['start'] = $start;
		return $this;
	}
	
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<ol '.$this->getAttributes().'>'.$this->renderChildren().'</ol>';
	}
}