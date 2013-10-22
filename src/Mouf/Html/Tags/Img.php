<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;

/**
 * A &lt;img&gt; tag in HTML.
 * The &lt;img&gt; element represents an image.
 * Point
 * 
 *     The image given by the src attribute is the embedded content, and the value of the alt attribute is the img element's fallback content. 
 * 
 *     Example of images:
 *         PNG
 *         JPEG
 *         GIF
 *         single-page PDF
 *         XML file with an SVG root elemet
 *         APNG
 *         animated GIF ... 
 * 
 * However, this also precludes SVG files with script, multipage PDF files, interactive MNG files, HTML documents, plain text documents, and so forth.
 * 
 * 
 * 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Img implements HtmlElementInterface {
	use GlobalAttributesTrait;

    /**
	 * Specifies a URL referencing a non-interactive, optionally animated, image that is neither paged nor scripted. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getSrc() {
		return $this->attributes['src'];
	}
	
	/**
	 * Specifies a URL referencing a non-interactive, optionally animated, image that is neither paged nor scripted. 
	 * 
	 * @param string|ValueInterface $src
	 * @return static
	 */
	public function setSrc($src) {
		$this->attributes['src'] = $src;
		return $this;
	}
    /**
	 * Gives the fallback content for the image.
	 * The requirements on the alt attribute's value are described in the next section. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getAlt() {
		return $this->attributes['alt'];
	}
	
	/**
	 * Gives the fallback content for the image.
	 * The requirements on the alt attribute's value are described in the next section. 
	 * 
	 * @param string|ValueInterface $alt
	 * @return static
	 */
	public function setAlt($alt) {
		$this->attributes['alt'] = $alt;
		return $this;
	}
    /**
	 *     Specifies a hash-name reference to a map element with which to associate the object. 
	 * 
	 * 
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getUsemap() {
		return $this->attributes['usemap'];
	}
	
	/**
	 *     Specifies a hash-name reference to a map element with which to associate the object. 
	 * 
	 * 
	 * 
	 * 
	 * @param string|ValueInterface $usemap
	 * @return static
	 */
	public function setUsemap($usemap) {
		$this->attributes['usemap'] = $usemap;
		return $this;
	}
    /**
	 * Specifies that its img element provides access to a server-side image map. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getIsmap() {
		return $this->attributes['ismap'];
	}
	
	/**
	 * Specifies that its img element provides access to a server-side image map. 
	 * 
	 * @param string|ValueInterface $ismap
	 * @return static
	 */
	public function setIsmap($ismap) {
		$this->attributes['ismap'] = $ismap;
		return $this;
	}
    /**
	 * Give the width of the visual content of the element, in CSS pixels. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getWidth() {
		return $this->attributes['width'];
	}
	
	/**
	 * Give the width of the visual content of the element, in CSS pixels. 
	 * 
	 * @param string|ValueInterface $width
	 * @return static
	 */
	public function setWidth($width) {
		$this->attributes['width'] = $width;
		return $this;
	}
    /**
	 * Give the height of the visual content of the element, in CSS pixels. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getHeight() {
		return $this->attributes['height'];
	}
	
	/**
	 * Give the height of the visual content of the element, in CSS pixels. 
	 * 
	 * @param string|ValueInterface $height
	 * @return static
	 */
	public function setHeight($height) {
		$this->attributes['height'] = $height;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<img '.$this->getAttributes().'>'.$this->renderChildren().'</img>';
	}
}