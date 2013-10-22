<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;bdo&gt; tag in HTML.
 * The &lt;bdo&gt; element represent explicit text directionality formatting control for its children.
 * Point
 * 
 *     It allows authors to override the Unicode bidirectional algorithm by explicitly specifying a direction override.
 *     Authors must specify the dir attribute on this element, with the value ltr to specify a left-to-right override and with the value rtl to specify a right-to-left override. 
 * 
 * 
 * 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Bdo implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<bdo '.$this->getAttributes().'>'.$this->renderChildren().'</bdo>';
	}
}