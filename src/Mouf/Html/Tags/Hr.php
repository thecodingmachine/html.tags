<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;hr&gt; tag in HTML.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Hr implements HtmlElementInterface {
	use GlobalAttributesTrait;
	
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<hr '.$this->getAttributes().'/>';
	}
}