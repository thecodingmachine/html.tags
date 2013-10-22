<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;datalist&gt; tag in HTML.
 * The &lt;datalist&gt; element represents the list that represent predefined options for other controls.
 * Point
 * 
 *     The value of an option element in a datalist element represent a suggestion. 
 * 
 * 
 *     The datalist element is hooked up to an input element using the list attribute on the input element.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Datalist implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<datalist '.$this->getAttributes().'>'.$this->renderChildren().'</datalist>';
	}
}