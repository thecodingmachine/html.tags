<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;table&gt; tag in HTML.
 * The &lt;table&gt; element represents data with more than one dimension, in the form of a table.
 * Point
 * 
 *     Tables must not be used as layout aids. There are a variety of alternatives to using HTML tables for layout, primarily using CSS positioning and the CSS table model.
 *     Users might have difficulty understanding the content, authors should include explanatory information introducing the table. This information is useful for all users, but is especially useful for users who cannot see the table, e.g. users of screen readers.
 *     Tables have rows and columns given by their descendants. A table must not have an empty row or column. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Table implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * explanatory information introducing the table 
	 * 
	 * @return string|ValueInterface
	 */
	public function getSummary() {
		return isset($this->attributes['summary'])?$this->attributes['summary']:null;
	}
	
	/**
	 * explanatory information introducing the table 
	 * 
	 * @param string|ValueInterface $summary
	 * @return static
	 */
	public function setSummary($summary) {
		$this->attributes['summary'] = $summary;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<table '.$this->getAttributes().'>'.$this->renderChildren().'</table>';
	}
}