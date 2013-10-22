<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;h5&gt; tag in HTML.
 * The &lt;h5&gt; element is the level 5 header
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class H5 implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<h5 '.$this->getAttributes().'>'.$this->renderChildren().'</h5>';
	}
}