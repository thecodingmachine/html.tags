<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;s&gt; tag in HTML.
 * The &lt;s&gt; element represents contents that are no longer accurate or no longer relevant.
 * Point
 * 
 *     The s element mark a span of text as having been removed from a document. when indicating document edits, use the del element. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class S implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<s '.$this->getAttributes().'>'.$this->renderChildren().'</s>';
	}
}