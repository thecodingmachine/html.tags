<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;legend&gt; tag in HTML.
 * The &lt;legend&gt; element represents a caption for the rest of the contents of the legend element's parent fieldset element. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Legend implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<legend '.$this->getAttributes().'>'.$this->renderChildren().'</legend>';
	}
}