<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;dd&gt; tag in HTML.
 * The &lt;dd&gt; element represents the description, definition, or value, part of a term-description group in a description list.
 *  * 
 * @author David Négrier <david@mouf-php.com>
 */
class Dd implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;
	
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<dd '.$this->getAttributes().'>'.$this->renderChildren().'</dd>';
	}
}