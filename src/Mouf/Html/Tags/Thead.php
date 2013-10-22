<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;thead&gt; tag in HTML.
 * The &lt;thead&gt; element represents the block of rows that consist of the column labels (headers) for the parent table element, if the thead element has a parent and it is a table.
 * Point
 * 
 *     As a child of a table element, after any caption, and colgroup elements and before any tbody, tfoot, and tr elements, but only if there are no other thead elements that are children of the table element.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Thead implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<thead '.$this->getAttributes().'>'.$this->renderChildren().'</thead>';
	}
}