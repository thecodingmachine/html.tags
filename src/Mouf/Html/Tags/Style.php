<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;style&gt; tag in HTML.
 * The &lt;style&gt; element allows authors to embed style information in their documents. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Style implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * Specifies which media the styles apply to.
	 * The default, if the media attribute is omitted, is "all", meaning that by default styles apply to all media. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getMedia() {
		return $this->attributes['media'];
	}
	
	/**
	 * Specifies which media the styles apply to.
	 * The default, if the media attribute is omitted, is "all", meaning that by default styles apply to all media. 
	 * 
	 * @param string|ValueInterface $media
	 * @return static
	 */
	public function setMedia($media) {
		$this->attributes['media'] = $media;
		return $this;
	}
    /**
	 * A valid MIME type that designates a styling language.
	 * Gives the styling language.
	 * The default value for the type attribute, which is used if the attribute is absent, is "text/css". 
	 * 
	 * @return string|ValueInterface
	 */
	public function getType() {
		return $this->attributes['type'];
	}
	
	/**
	 * A valid MIME type that designates a styling language.
	 * Gives the styling language.
	 * The default value for the type attribute, which is used if the attribute is absent, is "text/css". 
	 * 
	 * @param string|ValueInterface $type
	 * @return static
	 */
	public function setType($type) {
		$this->attributes['type'] = $type;
		return $this;
	}
    /**
	 * boolean
	 * Indicates that the specified style information is meant to apply only to the style element's parent element, and that element's child nodes. Otherwise, the specified styles are meant to apply to the entire document.
	 * 
	 * @return string|ValueInterface
	 */
	public function getScoped() {
		return $this->attributes['scoped'];
	}
	
	/**
	 * boolean
	 * Indicates that the specified style information is meant to apply only to the style element's parent element, and that element's child nodes. Otherwise, the specified styles are meant to apply to the entire document.
	 * 
	 * @param string|ValueInterface $scoped
	 * @return static
	 */
	public function setScoped($scoped) {
		$this->attributes['scoped'] = $scoped;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<style '.$this->getAttributes().'>'.$this->renderChildren().'</style>';
	}
}