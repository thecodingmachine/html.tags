<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;var&gt; tag in HTML.
 * The &lt;var&gt; element represents a variable.
 * Point
 * 
 *     This element could be an actual variable in a mathematical expression or programming context. 
 * 
 * 
 * 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Var implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<var '.$this->getAttributes().'>'.$this->renderChildren().'</var>';
	}
}