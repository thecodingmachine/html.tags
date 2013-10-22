<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;sup&gt; tag in HTML.
 * The &lt;sup&gt; element represents a superscript.
 * Point
 * 
 *     This element must be used only to mark up typographical conventions with specific meanings. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Sup implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<sup '.$this->getAttributes().'>'.$this->renderChildren().'</sup>';
	}
}