<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;rp&gt; tag in HTML.
 * The &lt;rp&gt; element can be used to provide parentheses around a ruby text component of a ruby annotation.
 * Point
 * 
 *     Parentheses be shown by user agents that don't support ruby annotations. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Rp implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<rp '.$this->getAttributes().'>'.$this->renderChildren().'</rp>';
	}
}