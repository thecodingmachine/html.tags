<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;rt&gt; tag in HTML.
 * The &lt;rt&gt; element marks the ruby text component of a ruby annotation.
 * Point
 * 
 *     An rt element that is a child of a ruby element represents an annotation for the nodes that immediately precedes. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Rt implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<rt '.$this->getAttributes().'>'.$this->renderChildren().'</rt>';
	}
}