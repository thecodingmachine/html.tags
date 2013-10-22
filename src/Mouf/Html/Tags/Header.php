<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;header&gt; tag in HTML.
 * The &lt;header&gt; element represents a group of introductory or navigational aids. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Header implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<header '.$this->getAttributes().'>'.$this->renderChildren().'</header>';
	}
}