<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;h2&gt; tag in HTML.
 * The &lt;h2&gt; element is the level 2 header
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class H2 implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<h2 '.$this->getAttributes().'>'.$this->renderChildren().'</h2>';
	}
}