<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;

/**
 * A &lt;br&gt; tag in HTML.
 * The &lt;br&gt; element represents a line break.
 * Point
 * 
 *     This element must be used only for line breaks that are actually part of the content:
 *         poems
 *         Addresses
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Br implements HtmlElementInterface {
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<br '.$this->getAttributes().'>'.$this->renderChildren().'</br>';
	}
}