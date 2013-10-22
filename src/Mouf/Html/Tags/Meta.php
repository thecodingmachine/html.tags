<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;

/**
 * A &lt;meta&gt; tag in HTML.
 * The &lt;meta&gt; element represents various kinds of metadata that cannot be expressed using the title, base, link, style, and script elements.
 * Point
 * 
 *     Exactly one of the name, http-equiv, and charset attributes must be specified. 
 * 
 * 
 *     If either name or http-equiv is specified, then the content attribute must also be specified. Otherwise, it must be omitted. 
 * 
 * 
 * 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Meta implements HtmlElementInterface {
	use GlobalAttributesTrait;

    /**
	 *     string
	 *     Sets document metadata.
	 *         application-name
	 *         Giving the name of the Web application that the page represents.
	 *         author
	 *         Giving the name of one of the page's authors.
	 *         description
	 *         Describes the page. [Example A]
	 *         generator
	 *         Identifies one of the software packages used to generate the document.
	 *         keywords
	 *         Giving the keyword relevant to the page. [Example A] 
	 * 
	 * Other metadata names may be registered in the WHATWG Wiki MetaExtensions page. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getName() {
		return $this->attributes['name'];
	}
	
	/**
	 *     string
	 *     Sets document metadata.
	 *         application-name
	 *         Giving the name of the Web application that the page represents.
	 *         author
	 *         Giving the name of one of the page's authors.
	 *         description
	 *         Describes the page. [Example A]
	 *         generator
	 *         Identifies one of the software packages used to generate the document.
	 *         keywords
	 *         Giving the keyword relevant to the page. [Example A] 
	 * 
	 * Other metadata names may be registered in the WHATWG Wiki MetaExtensions page. 
	 * 
	 * @param string|ValueInterface $name
	 * @return static
	 */
	public function setName($name) {
		$this->attributes['name'] = $name;
		return $this;
	}
    /**
	 * When the http-equiv attribute is specified on a meta element, the element is a pragma directive.
	 * 
	 *     content-language
	 *     Sets the pragma-set default language.
	 *     content-type
	 *     Alternative form of setting the charset attribute
	 *     default-style
	 *     Sets the name of the default alternative style sheet set.
	 *     refresh
	 *     Acts as timed redirect.
	 * 
	 * @return string|ValueInterface
	 */
	public function getHttpequiv() {
		return $this->attributes['http-equiv'];
	}
	
	/**
	 * When the http-equiv attribute is specified on a meta element, the element is a pragma directive.
	 * 
	 *     content-language
	 *     Sets the pragma-set default language.
	 *     content-type
	 *     Alternative form of setting the charset attribute
	 *     default-style
	 *     Sets the name of the default alternative style sheet set.
	 *     refresh
	 *     Acts as timed redirect.
	 * 
	 * @param string|ValueInterface $httpequiv
	 * @return static
	 */
	public function setHttpequiv($httpequiv) {
		$this->attributes['http-equiv'] = $httpequiv;
		return $this;
	}
    /**
	 * Gives the value of the document metadata or pragma directive when the element is used for those purposes. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getContent() {
		return $this->attributes['content'];
	}
	
	/**
	 * Gives the value of the document metadata or pragma directive when the element is used for those purposes. 
	 * 
	 * @param string|ValueInterface $content
	 * @return static
	 */
	public function setContent($content) {
		$this->attributes['content'] = $content;
		return $this;
	}
    /**
	 * Specifies the character encoding used by the document.
	 * 
	 * @return string|ValueInterface
	 */
	public function getCharset() {
		return $this->attributes['charset'];
	}
	
	/**
	 * Specifies the character encoding used by the document.
	 * 
	 * @param string|ValueInterface $charset
	 * @return static
	 */
	public function setCharset($charset) {
		$this->attributes['charset'] = $charset;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<meta '.$this->getAttributes().'>'.$this->renderChildren().'</meta>';
	}
}