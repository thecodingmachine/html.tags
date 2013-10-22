<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;footer&gt; tag in HTML.
 * The &lt;footer&gt; element represents a footer for its nearest ancestor sectioning content or sectioning root element.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Footer implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<footer '.$this->getAttributes().'>'.$this->renderChildren().'</footer>';
	}
}