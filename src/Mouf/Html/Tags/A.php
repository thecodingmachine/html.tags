<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;a&gt; tag in HTML.
 * The &lt;a&gt; element represents a hyperlink. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class A implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * A URL that provides the destination of the hyperlink. If the href attribute is not specified, the element represents a placeholder hyperlink. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getHref() {
		return $this->attributes['href'];
	}
	
	/**
	 * A URL that provides the destination of the hyperlink. If the href attribute is not specified, the element represents a placeholder hyperlink. 
	 * 
	 * @param string|ValueInterface $href
	 * @return static
	 */
	public function setHref($href) {
		$this->attributes['href'] = $href;
		return $this;
	}
    /**
	 *     Specifies that its a element is a named hyperlink, with the name given by the value of this attribute.
	 *     The name attribute on the a element is obsolete. Consider putting an id attribute on the nearest container instead.
	 *     Any string, with the following restrictions:
	 *         must be at least one character long
	 *         must not contain any space characters 
	 * 
	 * 
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getName() {
		return $this->attributes['name'];
	}
	
	/**
	 *     Specifies that its a element is a named hyperlink, with the name given by the value of this attribute.
	 *     The name attribute on the a element is obsolete. Consider putting an id attribute on the nearest container instead.
	 *     Any string, with the following restrictions:
	 *         must be at least one character long
	 *         must not contain any space characters 
	 * 
	 * 
	 * 
	 * 
	 * @param string|ValueInterface $name
	 * @return static
	 */
	public function setName($name) {
		$this->attributes['name'] = $name;
		return $this;
	}
    /**
	 * A name or keyword giving a browsing context for UAs to use when following the hyperlink.
	 * The target attribute on the a element was deprecated in a previous version of HTML, but is no longer deprecated, as it is useful in Web applications, particularly in combination with the iframe element.
	 * Any string that is either of the following:
	 * 
	 *     a browsing-context name
	 *     any case-insensitive match for one of the following literal strings: "_blank", "_self", "_parent", or "_top". 
	 * 
	 * @return string|ValueInterface
	 */
	public function getTarget() {
		return $this->attributes['target'];
	}
	
	/**
	 * A name or keyword giving a browsing context for UAs to use when following the hyperlink.
	 * The target attribute on the a element was deprecated in a previous version of HTML, but is no longer deprecated, as it is useful in Web applications, particularly in combination with the iframe element.
	 * Any string that is either of the following:
	 * 
	 *     a browsing-context name
	 *     any case-insensitive match for one of the following literal strings: "_blank", "_self", "_parent", or "_top". 
	 * 
	 * @param string|ValueInterface $target
	 * @return static
	 */
	public function setTarget($target) {
		$this->attributes['target'] = $target;
		return $this;
	}
    /**
	 *     A list of tokens that specify the relationship between the document containing the hyperlink and the destination indicated by the hyperlink. 
	 * 
	 * 
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getRel() {
		return $this->attributes['rel'];
	}
	
	/**
	 *     A list of tokens that specify the relationship between the document containing the hyperlink and the destination indicated by the hyperlink. 
	 * 
	 * 
	 * 
	 * 
	 * @param string|ValueInterface $rel
	 * @return static
	 */
	public function setRel($rel) {
		$this->attributes['rel'] = $rel;
		return $this;
	}
    /**
	 * The language of the destination of the hyperlink.
	 * A valid language tag, as defined in [BCP47]. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getHreflang() {
		return $this->attributes['hreflang'];
	}
	
	/**
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
	 * The media for which the destination of the hyperlink was designed.
	 * A valid media query list, as defined in [MediaQueries].
	 * 
	 * @return string|ValueInterface
	 */
	public function getMedia() {
		return $this->attributes['media'];
	}
	
	/**
	 * The media for which the destination of the hyperlink was designed.
	 * A valid media query list, as defined in [MediaQueries].
	 * 
	 * @param string|ValueInterface $media
	 * @return static
	 */
	public function setMedia($media) {
		$this->attributes['media'] = $media;
		return $this;
	}
    /**
	 * The MIME type of the destination of the hyperlink.
	 * A string that identifies a valid MIME media type, as defined in [RFC2046].
	 * 
	 * @return string|ValueInterface
	 */
	public function getType() {
		return $this->attributes['type'];
	}
	
	/**
	 * The MIME type of the destination of the hyperlink.
	 * A string that identifies a valid MIME media type, as defined in [RFC2046].
	 * 
	 * @param string|ValueInterface $type
	 * @return static
	 */
	public function setType($type) {
		$this->attributes['type'] = $type;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<a '.$this->getAttributes().'>'.$this->renderChildren().'</a>';
	}
}