<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;hgroup&gt; tag in HTML.
 * The &lt;hgroup&gt; element represent the heading of a section.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Hgroup implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<hgroup '.$this->getAttributes().'>'.$this->renderChildren().'</hgroup>';
	}
}