<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;article&gt; tag in HTML.
 * The &lt;article&gt; element represents an independent item section of content. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Article implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<article '.$this->getAttributes().'>'.$this->renderChildren().'</article>';
	}
}