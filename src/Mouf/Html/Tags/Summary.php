<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;summary&gt; tag in HTML.
 * The &lt;summary&gt; element represents a summary, caption, or legend for the rest of the contents of the summary element's parent details element, if any. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Summary implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<summary '.$this->getAttributes().'>'.$this->renderChildren().'</summary>';
	}
}