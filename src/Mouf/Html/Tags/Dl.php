<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;dl&gt; tag in HTML.
 * The &lt;dl&gt; element represents the definition list. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Dl implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;
	
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<dl '.$this->getAttributes().'>'.$this->renderChildren().'</dl>';
	}
}