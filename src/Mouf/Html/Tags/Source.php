<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;

/**
 * A &lt;source&gt; tag in HTML.
 * The source element enables multiple media sources to be specified for audio and video elements.
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Source implements HtmlElementInterface {
	use GlobalAttributesTrait;

    /**
	 * The address of the media source.
	 * 
	 * @return string|ValueInterface
	 */
	public function getSrc() {
		return isset($this->attributes['src'])?$this->attributes['src']:null;
	}
	
	/**
	 * The address of the media source.
	 * 
	 * @param string|ValueInterface $src
	 * @return static
	 */
	public function setSrc($src) {
		$this->attributes['src'] = $src;
		return $this;
	}
    /**
	 * The type of the media source (used for helping the UA determine, before fetching this media source, if it can play it).
	 * 
	 * @return string|ValueInterface
	 */
	public function getType() {
		return isset($this->attributes['type'])?$this->attributes['type']:null;
	}
	
	/**
	 * The type of the media source (used for helping the UA determine, before fetching this media source, if it can play it).
	 * 
	 * @param string|ValueInterface $type
	 * @return static
	 */
	public function setType($type) {
		$this->attributes['type'] = $type;
		return $this;
	}
    /**
	 * The intended media type of the media source (used for helping the UA determine, before fetching this media source, if it is useful to the user).
	 * 
	 * @return string|ValueInterface
	 */
	public function getMedia() {
		return isset($this->attributes['media'])?$this->attributes['media']:null;
	}
	
	/**
	 * The intended media type of the media source (used for helping the UA determine, before fetching this media source, if it is useful to the user).
	 * 
	 * @param string|ValueInterface $media
	 * @return static
	 */
	public function setMedia($media) {
		$this->attributes['media'] = $media;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<source '.$this->getAttributes().'/>';
	}
}