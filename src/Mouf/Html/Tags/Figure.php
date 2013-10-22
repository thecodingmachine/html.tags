<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;figure&gt; tag in HTML.
 * The &lt;figure&gt; element represents some flow content.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Figure implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;
	
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<figure '.$this->getAttributes().'>'.$this->renderChildren().'</figure>';
	}
}