<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;

/**
 * A &lt;base&gt; tag in HTML.
 * The &lt;base&gt; element allows authors to specify the document base URL for the purposes of resolving relative URLs, and the name of the default browsing context for the purposes of following hyperlinks. The element does not represent any content beyond this information. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Base implements HtmlElementInterface {
	use GlobalAttributesTrait;

    /**
	 * valid URL potentially surrounded by spaces
	 * A base element, if it has an href attribute, must come before any other elements in the tree that have attributes defined as taking URLs, except the html element (its manifest attribute isn't affected by base elements).
	 * 
	 * @return string|ValueInterface
	 */
	public function getHref() {
		return isset($this->attributes['href'])?$this->attributes['href']:null;
	}
	
	/**
	 * valid URL potentially surrounded by spaces
	 * A base element, if it has an href attribute, must come before any other elements in the tree that have attributes defined as taking URLs, except the html element (its manifest attribute isn't affected by base elements).
	 * 
	 * @param string|ValueInterface $href
	 * @return static
	 */
	public function setHref($href) {
		$this->attributes['href'] = $href;
		return $this;
	}
    /**
	 * valid browsing context name or keyword ( _blank, _self, _parent, or _top)
	 * The value of the target attribute is used as the default when hyperlinks and forms in the Document cause navigation. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getTarget() {
		return isset($this->attributes['target'])?$this->attributes['target']:null;
	}
	
	/**
	 * valid browsing context name or keyword ( _blank, _self, _parent, or _top)
	 * The value of the target attribute is used as the default when hyperlinks and forms in the Document cause navigation. 
	 * 
	 * @param string|ValueInterface $target
	 * @return static
	 */
	public function setTarget($target) {
		$this->attributes['target'] = $target;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<base '.$this->getAttributes().'/>';
	}
}