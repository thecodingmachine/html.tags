<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;nav&gt; tag in HTML.
 * The &lt;nav&gt; element represents a section with navigation links. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Nav implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<nav '.$this->getAttributes().'>'.$this->renderChildren().'</nav>';
	}
}