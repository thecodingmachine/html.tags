<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;body&gt; tag in HTML.
 * The &lt;body&gt; element represents the main content of the document. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Body implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<body '.$this->getAttributes().'>'.$this->renderChildren().'</body>';
	}
}