<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;code&gt; tag in HTML.
 * The &lt;code&gt; element represents a fragment of computer code.
 * Point
 * 
 *     For example of computer code:
 *         XML element name
 *         filename
 *         computer program 
 * 
 * etc. Any other string that a computer would recognize. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Code implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<code '.$this->getAttributes().'>'.$this->renderChildren().'</code>';
	}
}