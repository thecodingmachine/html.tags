<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;math&gt; tag in HTML.
 * The &lt;math&gt; element represents the root of a MathML fragment. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Math implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<math '.$this->getAttributes().'>'.$this->renderChildren().'</math>';
	}
}