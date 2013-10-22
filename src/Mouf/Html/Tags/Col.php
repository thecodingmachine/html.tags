<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;col&gt; tag in HTML.
 * The &lt;col&gt; element represents one or more columns in the column group represented by that colgroup.
 * Point
 * 
 *     As a child of a colgroup element that doesn't have a span attribute. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Col implements HtmlElementInterface {
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
		echo '<col '.$this->getAttributes().'>'.$this->renderChildren().'</col>';
	}
}