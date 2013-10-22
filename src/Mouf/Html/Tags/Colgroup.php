<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;colgroup&gt; tag in HTML.
 * The &lt;colgroup&gt; element represents a group of one or more columns in the table that is its parent.
 * Point
 * 
 *     As a child of a table element, after any caption elements and before any thead, tbody, tfoot, and tr elements.
 *     If the colgroup element contains no col elements, then the element may have a span content attribute specified.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Colgroup implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * valid non-negative integer 
	 * 
	 * @return string|ValueInterface
	 */
	public function getSpan() {
		return $this->attributes['span'];
	}
	
	/**
	 * valid non-negative integer 
	 * 
	 * @param string|ValueInterface $span
	 * @return static
	 */
	public function setSpan($span) {
		$this->attributes['span'] = $span;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<colgroup '.$this->getAttributes().'>'.$this->renderChildren().'</colgroup>';
	}
}