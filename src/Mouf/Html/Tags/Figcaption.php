<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;
use Mouf\Utils\Value\ValueInterface;

/**
 * A &lt;figcaption&gt; tag in HTML.
 * The &lt;figcaption&gt; element represents a caption or legend for the contents of the parent figure element.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Figcaption implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;
	
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<figcaption '.$this->getAttributes().'>'.$this->renderChildren().'</figcaption>';
	}
}