<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;caption&gt; tag in HTML.
 * The &lt;caption&gt; element represents the title of the table that is its parent, if it has a parent and that is a table element.
 * Point
 * 
 *     A caption can introduce context for a table, making it significantly easier to understand.
 *     When a table element is the only content in a figure element other than the figcaption, the caption element should be omitted in favor of the figcaption.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Caption implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<caption '.$this->getAttributes().'>'.$this->renderChildren().'</caption>';
	}
}