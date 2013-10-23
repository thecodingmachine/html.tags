<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;

/**
 * A &lt;link&gt; tag in HTML.
 * The &lt;link&gt; element allows authors to link their document to other resources. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Link implements HtmlElementInterface {
	use GlobalAttributesTrait;

    /**
	 * URL potentially surrounded by spaces
	 * Specifies a URL that provides the destination of the link. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getHref() {
		return isset($this->attributes['href'])?$this->attributes['href']:null;
	}
	
	/**
	 * URL potentially surrounded by spaces
	 * Specifies a URL that provides the destination of the link. 
	 * 
	 * @param string|ValueInterface $href
	 * @return static
	 */
	public function setHref($href) {
		$this->attributes['href'] = $href;
		return $this;
	}
    /**
	 * set of space-separated tokens
	 * Specifies a list of tokens that specify the relationship between the document containing the link and the destination indicated by the link.Two categories of links can be created using the link element: Links to external resources and hyperlinks.
	 * 
	 * @return string|ValueInterface
	 */
	public function getRel() {
		return isset($this->attributes['rel'])?$this->attributes['rel']:null;
	}
	
	/**
	 * set of space-separated tokens
	 * Specifies a list of tokens that specify the relationship between the document containing the link and the destination indicated by the link.Two categories of links can be created using the link element: Links to external resources and hyperlinks.
	 * 
	 * @param string|ValueInterface $rel
	 * @return static
	 */
	public function setRel($rel) {
		$this->attributes['rel'] = $rel;
		return $this;
	}
    /**
	 *     media-query list
	 *     The media for which the destination of the hyperlink was designed.
	 *     If the link is a hyperlink then the media attribute is purely advisory, and describes for which media the document in question was designed.
	 *     However, if the link is an external resource link, then the media attribute is prescriptive. The user agent must apply the external resource when the media attribute's value matches the environment and the other relevant conditions apply, and must not apply it otherwise.
	 *     The default, if the media attribute is omitted, is "all", meaning that by default links apply to all media. 
	 * 
	 * 
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getMedia() {
		return isset($this->attributes['media'])?$this->attributes['media']:null;
	}
	
	/**
	 *     media-query list
	 *     The media for which the destination of the hyperlink was designed.
	 *     If the link is a hyperlink then the media attribute is purely advisory, and describes for which media the document in question was designed.
	 *     However, if the link is an external resource link, then the media attribute is prescriptive. The user agent must apply the external resource when the media attribute's value matches the environment and the other relevant conditions apply, and must not apply it otherwise.
	 *     The default, if the media attribute is omitted, is "all", meaning that by default links apply to all media. 
	 * 
	 * 
	 * 
	 * 
	 * @param string|ValueInterface $media
	 * @return static
	 */
	public function setMedia($media) {
		$this->attributes['media'] = $media;
		return $this;
	}
    /**
	 * language tag
	 * The language of the destination of the hyperlink.
	 * A valid language tag, as defined in [BCP47]. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getHreflang() {
		return isset($this->attributes['hreflang'])?$this->attributes['hreflang']:null;
	}
	
	/**
	 * language tag
	 * The language of the destination of the hyperlink.
	 * A valid language tag, as defined in [BCP47]. 
	 * 
	 * @param string|ValueInterface $hreflang
	 * @return static
	 */
	public function setHreflang($hreflang) {
		$this->attributes['hreflang'] = $hreflang;
		return $this;
	}
    /**
	 * A valid MIME type that destination of the hyperlink.
	 * gives the MIME type of the linked resource.
	 * The default value for the type attribute, which is used if the attribute is absent, is "text/css". 
	 * 
	 * @return string|ValueInterface
	 */
	public function getType() {
		return isset($this->attributes['type'])?$this->attributes['type']:null;
	}
	
	/**
	 * A valid MIME type that destination of the hyperlink.
	 * gives the MIME type of the linked resource.
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
	 * icon sizes
	 * The sizes attribute is used with the icon link type. The attribute must not be specified on link elements that do not have a rel attribute that specifies the icon keyword. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getSizes() {
		return isset($this->attributes['sizes'])?$this->attributes['sizes']:null;
	}
	
	/**
	 * icon sizes
	 * The sizes attribute is used with the icon link type. The attribute must not be specified on link elements that do not have a rel attribute that specifies the icon keyword. 
	 * 
	 * @param string|ValueInterface $sizes
	 * @return static
	 */
	public function setSizes($sizes) {
		$this->attributes['sizes'] = $sizes;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<link '.$this->getAttributes().'/>';
	}
}