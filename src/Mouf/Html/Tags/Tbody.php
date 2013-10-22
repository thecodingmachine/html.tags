<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;tbody&gt; tag in HTML.
 * The &lt;tbody&gt; element represents a block of rows that consist of a body of data for the parent table element, if the tbody element has a parent and it is a table.
 * Point
 * 
 *     As a child of a table element, after any caption, colgroup, and thead elements, but only if there are no tr elements that are children of the table element.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Tbody implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<tbody '.$this->getAttributes().'>'.$this->renderChildren().'</tbody>';
	}
}