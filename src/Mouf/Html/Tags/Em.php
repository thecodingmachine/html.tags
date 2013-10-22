<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;em&gt; tag in HTML.
 * The &lt;em&gt; element represents stress emphasis of its contents.
 * Point
 * 
 *     The placement of emphasis changes the meaning of the sentence.
 *     The level of emphasis that a particular piece of content has is given by its number of ancestor em elements.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Em implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<em '.$this->getAttributes().'>'.$this->renderChildren().'</em>';
	}
}