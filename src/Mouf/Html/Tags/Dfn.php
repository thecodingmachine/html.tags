<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;dfn&gt; tag in HTML.
 * The &lt;dfn&gt; element represents the defining instance of a term.
 * Point
 * 
 *     If the dfn element is specified, nearest parent of the dfn element(paragraph, description list group, or section) must also contain the definitions for the defining term. 
 * 
 *     The priority level of defining term is as follow: 
 * 
 *     Value of the title attribute in the dfn element. [Example A]
 *     Value of the title attribute in the abbr element. (if the dfn element contains exactly one element child node and no child text nodes, and that child element is the abbr element) [Example B]
 *     TextContent of the dfn element
 * 
 *     If the title attribute of the dfn element is present, then it must contain only the term being defined. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Dfn implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<dfn '.$this->getAttributes().'>'.$this->renderChildren().'</dfn>';
	}
}