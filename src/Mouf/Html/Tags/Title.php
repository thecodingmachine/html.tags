<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;

/**
 * A &lt;title&gt; tag in HTML.
 * The &lt;title&gt; element represents the document's title or name. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Title implements HtmlElementInterface {
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<title '.$this->getAttributes().'>'.$this->renderChildren().'</title>';
	}
}