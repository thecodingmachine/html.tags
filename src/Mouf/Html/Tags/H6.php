<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;h6&gt; tag in HTML.
 * The &lt;h6&gt; element is the level 6 header
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class H6 implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<h6 '.$this->getAttributes().'>'.$this->renderChildren().'</h6>';
	}
}