<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;section&gt; tag in HTML.
 * The &lt;section&gt; element represents a generic section of a document or application. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Section implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<section '.$this->getAttributes().'>'.$this->renderChildren().'</section>';
	}
}