<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;wbr&gt; tag in HTML.
 * The &lt;wbr&gt; element represents a line break opportunity. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Wbr implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<wbr '.$this->getAttributes().'>'.$this->renderChildren().'</wbr>';
	}
}