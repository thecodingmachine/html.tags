<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;div&gt; tag in HTML.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Div implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;
	
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<div '.$this->getAttributes().'>'.$this->renderChildren().'</div>';
	}
}