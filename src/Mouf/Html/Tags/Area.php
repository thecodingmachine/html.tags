<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;

/**
 * A &lt;area&gt; tag in HTML.
 * The &lt;area&gt; element represents either a hyperlink with some text and a corresponding area on an image map, or a dead area on an image map. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Area implements HtmlElementInterface {
	use GlobalAttributesTrait;

    /**
	 *     If the area element has a href attribute, the alt attribute must be present.
	 *     The alt attribute may be left blank if there is another area element in the same image map that points to the same resource and has a non-blank alt attribute. 
	 * 
	 * 
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getAlt() {
		return isset($this->attributes['alt'])?$this->attributes['alt']:null;
	}
	
	/**
	 *     If the area element has a href attribute, the alt attribute must be present.
	 *     The alt attribute may be left blank if there is another area element in the same image map that points to the same resource and has a non-blank alt attribute. 
	 * 
	 * 
	 * 
	 * 
	 * @param string|ValueInterface $alt
	 * @return static
	 */
	public function setAlt($alt) {
		$this->attributes['alt'] = $alt;
		return $this;
	}
    /**
	 *     This attribute gives the coordinates for the shape described by the shape attribute. The processing for this attribute is described as part of the image map processing model.
	 *         In the circle state
	 *         The area elements must have a coords attribute present, with three integers, the last of which must be non-negative.
	 *             distance in CSS pixels from the left edge of the image to the center of the circle
	 *             distance in CSS pixels from the top edge of the image to the center of the circle
	 *             radius of the circle 
	 * 
	 *         In the polygon state
	 *         The area elements must have a coords attribute with at least six integers, and the number of integers must be even. Each pair of integers must represent a coordinate given as the distances from the left and the top of the image in CSS pixels respectively, and all the coordinates together must represent the points of the polygon, in order.
	 *         In the rectangle state
	 *         The area elements must have a coords attribute with exactly four integers. the first of which must be less than the third, and the second of which must be less than the fourth.
	 *             distance from the left edge of the image to the left side of the rectangle
	 *             distance from the top edge to the top side
	 *             distance from the left edge to the right side
	 *             distance from the top edge to the bottom side 
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getCoords() {
		return isset($this->attributes['coords'])?$this->attributes['coords']:null;
	}
	
	/**
	 *     This attribute gives the coordinates for the shape described by the shape attribute. The processing for this attribute is described as part of the image map processing model.
	 *         In the circle state
	 *         The area elements must have a coords attribute present, with three integers, the last of which must be non-negative.
	 *             distance in CSS pixels from the left edge of the image to the center of the circle
	 *             distance in CSS pixels from the top edge of the image to the center of the circle
	 *             radius of the circle 
	 * 
	 *         In the polygon state
	 *         The area elements must have a coords attribute with at least six integers, and the number of integers must be even. Each pair of integers must represent a coordinate given as the distances from the left and the top of the image in CSS pixels respectively, and all the coordinates together must represent the points of the polygon, in order.
	 *         In the rectangle state
	 *         The area elements must have a coords attribute with exactly four integers. the first of which must be less than the third, and the second of which must be less than the fourth.
	 *             distance from the left edge of the image to the left side of the rectangle
	 *             distance from the top edge to the top side
	 *             distance from the left edge to the right side
	 *             distance from the top edge to the bottom side 
	 * 
	 * 
	 * @param string|ValueInterface $coords
	 * @return static
	 */
	public function setCoords($coords) {
		$this->attributes['coords'] = $coords;
		return $this;
	}
    /**
	 * circle/ poly/ rect/ default
	 * 
	 *     circle
	 *     Circle keyword represents circle state.
	 *     poly
	 *     Poly keyword represents polygon state.
	 *     rect
	 *     Rect keyword represents rectangle state.
	 *     default
	 *     The area is the whole image. area elements must not have a coords attribute. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getShape() {
		return isset($this->attributes['shape'])?$this->attributes['shape']:null;
	}
	
	/**
	 * circle/ poly/ rect/ default
	 * 
	 *     circle
	 *     Circle keyword represents circle state.
	 *     poly
	 *     Poly keyword represents polygon state.
	 *     rect
	 *     Rect keyword represents rectangle state.
	 *     default
	 *     The area is the whole image. area elements must not have a coords attribute. 
	 * 
	 * @param string|ValueInterface $shape
	 * @return static
	 */
	public function setShape($shape) {
		$this->attributes['shape'] = $shape;
		return $this;
	}
    /**
	 * A URL that provides the destination of the hyperlink. If the href attribute is not specified, the element represents a placeholder hyperlink. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getHreflang() {
		return isset($this->attributes['hreflang'])?$this->attributes['hreflang']:null;
	}
	
	/**
	 * A URL that provides the destination of the hyperlink. If the href attribute is not specified, the element represents a placeholder hyperlink. 
	 * 
	 * @param string|ValueInterface $hreflang
	 * @return static
	 */
	public function setHreflang($hreflang) {
		$this->attributes['hreflang'] = $hreflang;
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
		return isset($this->attributes['target'])?$this->attributes['target']:null;
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
	 * A list of tokens that specify the relationship between the document containing the hyperlink and the destination indicated by the hyperlink. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getRel() {
		return isset($this->attributes['rel'])?$this->attributes['rel']:null;
	}
	
	/**
	 * A list of tokens that specify the relationship between the document containing the hyperlink and the destination indicated by the hyperlink. 
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
		return isset($this->attributes['hreflang'])?$this->attributes['hreflang']:null;
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
		return isset($this->attributes['media'])?$this->attributes['media']:null;
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
		return isset($this->attributes['type'])?$this->attributes['type']:null;
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
		echo '<area '.$this->getAttributes().'/>';
	}
}