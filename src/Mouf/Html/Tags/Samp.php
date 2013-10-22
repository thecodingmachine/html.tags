<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;samp&gt; tag in HTML.
 * The &lt;samp&gt; element represents output from a program or computing system. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Samp implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<samp '.$this->getAttributes().'>'.$this->renderChildren().'</samp>';
	}
}