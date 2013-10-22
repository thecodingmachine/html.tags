<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;kbd&gt; tag in HTML.
 * The &lt;kbd&gt; element represents user input.
 * Point
 * 
 *     Example of user input:
 *         keyboard input
 *         voice commands ... 
 * 
 *     When the kbd element is nested inside a samp element, it represents the input as it was echoed by the system.
 *     When the kbd element contains a samp element, it represents input based on system output, for example invoking a menu item.
 *     When the kbd element is nested inside another kbd element, it represents an actual key or other single unit of input as appropriate for the input mechanism.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Kbd implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<kbd '.$this->getAttributes().'>'.$this->renderChildren().'</kbd>';
	}
}