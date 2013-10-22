<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;head&gt; tag in HTML.
 * The &lt;head&gt; element represents a collection of metadata for the Document. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Head implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<head '.$this->getAttributes().'>'.$this->renderChildren().'</head>';
	}
}