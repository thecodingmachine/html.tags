<?php
namespace Mouf\Html\Tags;

use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Html\HtmlElement\HtmlString;

/**
 * A trait that defines an object can have HTML children
 * 
 * @author David Négrier <david@mouf-php.com>
 */
trait ChildrenTrait {
	
	/**
	 * Children of this element.
	 * 
	 * @var HtmlElementInterface[]
	 */
	protected $children = array();
	
	/**
	 * Returns the list of children of this element.
	 * 
	 * @return HtmlElementInterface[]
	 */
	public function getChildren() {
		return $this->children;
	}

	/**
	 * Sets the list of children of this element.
	 * 
	 * @param HtmlElementInterface[] $children
	 * @return $this
	 */
	public function setChildren(array $children) {
		$this->children = $children;
		return $this;
	}
	
	/**
	 * Adds a child to this element.
	 * 
	 * @param HtmlElementInterface $child
	 * @return \Mouf\Html\Tags\ChildrenTrait
	 */
	public function addChild(HtmlElementInterface $child) {
		$this->children[] = $child;
		return $this;
	}
	
	/**
	 * Append some text in the tag.
	 * 
	 * @param string $text
	 */
	public function addText($text) {
		$this->children[] = new HtmlString($text);
	}
	
	/**
	 * Renders HTML attributes.
	 * 
	 * @return string
	 */
	protected function renderChildren() {
		ob_start();
		foreach ($this->children as $child) {
			if ($child != null) {
				$child->toHtml();
			}
		}
		return ob_get_clean();
	}
	
}