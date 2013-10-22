<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;dt&gt; tag in HTML.
 * The &lt;dt&gt; element represents the term, or name, part of a term-description group in a description list.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Dt implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;
	
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<dt '.$this->getAttributes().'>'.$this->renderChildren().'</dt>';
	}
}