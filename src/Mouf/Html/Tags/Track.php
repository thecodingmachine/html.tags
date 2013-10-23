<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;

/**
 * A &lt;track&gt; tag in HTML.
 * The &lt;track&gt; element allows authors to specify explicit external timed tracks for media elements. It does not represent anything on its own. 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Track implements HtmlElementInterface {
	use GlobalAttributesTrait;

    /**
	 * subtitles/ captions/ descriptions/ chapters/ metadata
	 * 
	 *     subtitles
	 *     Transcription or translation of the dialogue, suitable for when the sound is available but not understood
	 *     captions
	 *     Transcription or translation of the dialogue, sound effects, relevant musical cues, and other relevant audio information, suitable for when the soundtrack is unavailable
	 *     descriptions
	 *     Textual descriptions of the video component of the media resource, intended for audio synthesis when the visual component is unavailable
	 *     chapters
	 *     Chapter titles, intended to be used for navigating the media resource.
	 *     metadatas
	 *     Tracks intended for use from script. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getKind() {
		return isset($this->attributes['kind'])?$this->attributes['kind']:null;
	}
	
	/**
	 * subtitles/ captions/ descriptions/ chapters/ metadata
	 * 
	 *     subtitles
	 *     Transcription or translation of the dialogue, suitable for when the sound is available but not understood
	 *     captions
	 *     Transcription or translation of the dialogue, sound effects, relevant musical cues, and other relevant audio information, suitable for when the soundtrack is unavailable
	 *     descriptions
	 *     Textual descriptions of the video component of the media resource, intended for audio synthesis when the visual component is unavailable
	 *     chapters
	 *     Chapter titles, intended to be used for navigating the media resource.
	 *     metadatas
	 *     Tracks intended for use from script. 
	 * 
	 * @param string|ValueInterface $kind
	 * @return static
	 */
	public function setKind($kind) {
		$this->attributes['kind'] = $kind;
		return $this;
	}
    /**
	 *     Gives the address of the timed track data.
	 *     This attribute must be present. 
	 * 
	 * 
	 * 
	 * 
	 * @return string|ValueInterface
	 */
	public function getSrc() {
		return isset($this->attributes['src'])?$this->attributes['src']:null;
	}
	
	/**
	 *     Gives the address of the timed track data.
	 *     This attribute must be present. 
	 * 
	 * 
	 * 
	 * 
	 * @param string|ValueInterface $src
	 * @return static
	 */
	public function setSrc($src) {
		$this->attributes['src'] = $src;
		return $this;
	}
    /**
	 * character encoding name 
	 * 
	 * @return string|ValueInterface
	 */
	public function getCharset() {
		return isset($this->attributes['charset'])?$this->attributes['charset']:null;
	}
	
	/**
	 * character encoding name 
	 * 
	 * @param string|ValueInterface $charset
	 * @return static
	 */
	public function setCharset($charset) {
		$this->attributes['charset'] = $charset;
		return $this;
	}
    /**
	 * Gives the language of the timed track data.
	 * This attribute must be present if the element's kind attribute is in the subtitles state. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getSrclang() {
		return isset($this->attributes['srclang'])?$this->attributes['srclang']:null;
	}
	
	/**
	 * Gives the language of the timed track data.
	 * This attribute must be present if the element's kind attribute is in the subtitles state. 
	 * 
	 * @param string|ValueInterface $srclang
	 * @return static
	 */
	public function setSrclang($srclang) {
		$this->attributes['srclang'] = $srclang;
		return $this;
	}
    /**
	 * Gives a user-readable title for the track. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getLabel() {
		return isset($this->attributes['label'])?$this->attributes['label']:null;
	}
	
	/**
	 * Gives a user-readable title for the track. 
	 * 
	 * @param string|ValueInterface $label
	 * @return static
	 */
	public function setLabel($label) {
		$this->attributes['label'] = $label;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<track '.$this->getAttributes().'/>';
	}
}