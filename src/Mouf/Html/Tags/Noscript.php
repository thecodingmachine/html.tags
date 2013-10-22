<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;noscript&gt; tag in HTML.
 * The &lt;noscript&gt; element represents nothing if scripting is enabled, and represents its children if scripting is disabled.
 * Point
 * 
 *     The noscript element is used to present different markup to user agents that don't support scripting 
 * 
 *     The noscript element is only effective in the HTML syntax, it has no effect in the XHTML syntax. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Noscript implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<noscript '.$this->getAttributes().'>'.$this->renderChildren().'</noscript>';
	}
}