<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;h1&gt; tag in HTML.
 * The &lt;h1&gt; element is the level 1 header
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class H1 implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<h1 '.$this->getAttributes().'>'.$this->renderChildren().'</h1>';
	}
}