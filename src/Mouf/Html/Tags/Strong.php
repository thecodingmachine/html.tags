<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;strong&gt; tag in HTML.
 * The &lt;strong&gt; element represents strong importance for its contents.
 * Point
 * 
 *     The relative level of importance of a piece of content is given by its number of ancestor strong elements.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Strong implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<strong '.$this->getAttributes().'>'.$this->renderChildren().'</strong>';
	}
}