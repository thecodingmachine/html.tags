<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;

/**
 * A &lt;iframe&gt; tag in HTML.
 * The &lt;iframe&gt; element represents a nested browsing context.
 * Point
 * 
 *     If the src attribute and the srcdoc attribute are both specified together, the srcdoc attribute takes priority. This allows authors to provide a fallback URL for legacy user agents that do not support the srcdoc attribute. 
 * 
 * 
 * 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Iframe implements HtmlElementInterface {
	use GlobalAttributesTrait;

    /**
	 * Gives the address of a page that the nested browsing context is to contain. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getSrc() {
		return isset($this->attributes['src'])?$this->attributes['src']:null;
	}
	
	/**
	 * Gives the address of a page that the nested browsing context is to contain. 
	 * 
	 * @param string|ValueInterface $src
	 * @return static
	 */
	public function setSrc($src) {
		$this->attributes['src'] = $src;
		return $this;
	}
    /**
	 * Gives the content of the page that the nested browsing context is to contain. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getSrcdoc() {
		return isset($this->attributes['srcdoc'])?$this->attributes['srcdoc']:null;
	}
	
	/**
	 * Gives the content of the page that the nested browsing context is to contain. 
	 * 
	 * @param string|ValueInterface $srcdoc
	 * @return static
	 */
	public function setSrcdoc($srcdoc) {
		$this->attributes['srcdoc'] = $srcdoc;
		return $this;
	}
    /**
	 * Represents the browsing-context name. When the browsing context is created, if the attribute is present, the browsing context name must be set to the value of this attribute; otherwise, the browsing context name must be set to the empty string. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getName() {
		return isset($this->attributes['name'])?$this->attributes['name']:null;
	}
	
	/**
	 * Represents the browsing-context name. When the browsing context is created, if the attribute is present, the browsing context name must be set to the value of this attribute; otherwise, the browsing context name must be set to the empty string. 
	 * 
	 * @param string|ValueInterface $name
	 * @return static
	 */
	public function setName($name) {
		$this->attributes['name'] = $name;
		return $this;
	}
    /**
	 * allow-same-origin/ allow-top-navigation/ allow-forms/ allow-scripts
	 * Enables a set of extra restrictions on any content hosted by the iframe.
	 * 
	 *     If presents, given in the following list set.
	 *         prevents content from navigating browsing contexts other than the sandboxed browsing context itself.
	 *         prevents content from navigating their top-level browsing context.
	 *         prevents content from instantiating plugins, whether using the embed element, the object element, the applet element, or through navigation of a nested browsing context.
	 *         prevents content from using the seamless attribute on descendant iframe elements.
	 *         forces content into a unique origin, thus preventing it from accessing other content from the same origin.
	 *         blocks form submission, blocks script execution.
	 *         blocks features that trigger automatically, such as automatically playing a video or automatically focusing a form control. 
	 *     allow-same-origin
	 *     allows the content to be treated as being from the same origin instead of forcing it into a unique origin.
	 *     allow-top-navigation
	 *     allows the content to navigate its top-level browsing context
	 *     allow-forms and allow-scripts
	 *     re-enable forms and scripts respectively (though scripts are still prevented from creating popups). 
	 * 
	 * @return string|ValueInterface
	 */
	public function getSandbox() {
		return isset($this->attributes['sandbox'])?$this->attributes['sandbox']:null;
	}
	
	/**
	 * allow-same-origin/ allow-top-navigation/ allow-forms/ allow-scripts
	 * Enables a set of extra restrictions on any content hosted by the iframe.
	 * 
	 *     If presents, given in the following list set.
	 *         prevents content from navigating browsing contexts other than the sandboxed browsing context itself.
	 *         prevents content from navigating their top-level browsing context.
	 *         prevents content from instantiating plugins, whether using the embed element, the object element, the applet element, or through navigation of a nested browsing context.
	 *         prevents content from using the seamless attribute on descendant iframe elements.
	 *         forces content into a unique origin, thus preventing it from accessing other content from the same origin.
	 *         blocks form submission, blocks script execution.
	 *         blocks features that trigger automatically, such as automatically playing a video or automatically focusing a form control. 
	 *     allow-same-origin
	 *     allows the content to be treated as being from the same origin instead of forcing it into a unique origin.
	 *     allow-top-navigation
	 *     allows the content to navigate its top-level browsing context
	 *     allow-forms and allow-scripts
	 *     re-enable forms and scripts respectively (though scripts are still prevented from creating popups). 
	 * 
	 * @param string|ValueInterface $sandbox
	 * @return static
	 */
	public function setSandbox($sandbox) {
		$this->attributes['sandbox'] = $sandbox;
		return $this;
	}
    /**
	 * Indicates that the iframe element's browsing context is to be rendered in a manner that makes it appear to be part of the containing document (seamlessly included in the parent document). 
	 * 
	 * @return string|ValueInterface
	 */
	public function getSeamless() {
		return isset($this->attributes['seamless'])?$this->attributes['seamless']:null;
	}
	
	/**
	 * Indicates that the iframe element's browsing context is to be rendered in a manner that makes it appear to be part of the containing document (seamlessly included in the parent document). 
	 * 
	 * @param string|ValueInterface $seamless
	 * @return static
	 */
	public function setSeamless($seamless) {
		$this->attributes['seamless'] = $seamless;
		return $this;
	}
    /**
	 * Give the width of the visual content of the element, in CSS pixels. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getWidth() {
		return isset($this->attributes['width'])?$this->attributes['width']:null;
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
		return isset($this->attributes['height'])?$this->attributes['height']:null;
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
		echo '<iframe '.$this->getAttributes().'/>';
	}
}