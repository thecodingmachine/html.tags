<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;pre&gt; tag in HTML.
 * The &lt;pre&gt; element represents a block of preformatted text. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Pre implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;
	
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<pre '.$this->getAttributes().'>'.$this->renderChildren().'</pre>';
	}
}