<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;aside&gt; tag in HTML.
 * The &lt;aside&gt; element represents a section of a page that consists of content that is tangentially related to the content around the aside element, and which could be considered separate from that content.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Aside implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<aside '.$this->getAttributes().'>'.$this->renderChildren().'</aside>';
	}
}