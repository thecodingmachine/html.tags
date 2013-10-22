<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;i&gt; tag in HTML.
 * The &lt;i&gt; element represents an span of text that offset from the normal prose.
 * Point
 * 
 *     Some examples of cases:
 *         voice
 *         taxonomic designation
 *         technical term
 *         idiomatic phrase from another language
 *         ... Some other prose whose typical typographic presentation is italicized. 
 * 
 *     Authors are encouraged to consider whether other elements might be more applicable than the i element, for instance the em element for marking up stress emphasis, or the dfn element to mark up the defining instance of a term. 
 * 
 *     Authors can use the class attribute on the i element to identify why the element is being used, so that if the style of a particular use is to be changed at a later date, the author doesn't have to go through the entire document (or series of related documents) annotating each use. [Example A] For more information see W3C Internationalization articles
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class I implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<i '.$this->getAttributes().'>'.$this->renderChildren().'</i>';
	}
}