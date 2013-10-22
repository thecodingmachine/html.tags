<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;mark&gt; tag in HTML.
 * The &lt;mark&gt; element represents a run of text in one document marked or highlighted for reference purposes, due to its relevance in another context. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Mark implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<mark '.$this->getAttributes().'>'.$this->renderChildren().'</mark>';
	}
}