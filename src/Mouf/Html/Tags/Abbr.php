<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;abbr&gt; tag in HTML.
 * The &lt;abbr&gt; element represents an abbreviation or acronym.
 * Point
 * 
 *     If the title attribute is specified, it must contain an expansion of the abbreviation, and nothing else.
 *     Abbreviations for which the author wants to give expansions, where using the abbr element with a title attribute is an alternative to including the expansion inline.
 *     Abbreviations that are likely to be unfamiliar to the document's readers, for which authors are encouraged to either mark up the abbreviation using a abbr element with a title attribute or include the expansion inline in the text the first time the abbreviation is used. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Abbr implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<abbr '.$this->getAttributes().'>'.$this->renderChildren().'</abbr>';
	}
}