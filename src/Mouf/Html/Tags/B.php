<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;b&gt; tag in HTML.
 * The &lt;b&gt; element represents a span of text to be stylistically offset from the normal prose without conveying any extra importance.
 * Point
 * 
 *     Some examples of cases:
 *         key words in a document abstract
 *         product names in a review
 *         ... other spans of text whose typical typographic presentation is boldened. 
 * 
 *     The b element should be used as a last resort when no other element is more appropriate. In particular, headings should use the h1 to h6 elements, stress emphasis should use the em element, importance should be denoted with the strong element, and text marked or highlighted should use the mark element.
 * 
 *     Authors can use the class attribute on the b element to identify why the element is being used, so that if the style of a particular use is to be changed at a later date, the author doesn't have to go through annotating each use.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class B implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<b '.$this->getAttributes().'>'.$this->renderChildren().'</b>';
	}
}