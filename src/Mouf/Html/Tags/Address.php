<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;address&gt; tag in HTML.
 * The &lt;address&gt; element represents the contact information for its nearest article or body element ancestor. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Address implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<address '.$this->getAttributes().'>'.$this->renderChildren().'</address>';
	}
}