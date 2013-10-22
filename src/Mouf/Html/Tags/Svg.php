<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;svg&gt; tag in HTML.
 * The &lt;svg&gt; element represents the root of a Scalable Vector Graphics (SVG) fragment. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Svg implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<svg '.$this->getAttributes().'>'.$this->renderChildren().'</svg>';
	}
}