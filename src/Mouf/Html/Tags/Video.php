<?php
namespace Mouf\Html\Tags;

use Mouf\Html\Tags\GlobalAttributesTrait;
use Mouf\Html\HtmlElement\HtmlElementInterface;
use Mouf\Utils\Value\ValueInterface;
use Mouf\Html\Tags\ChildrenTrait;

/**
 * A &lt;video&gt; tag in HTML.
 * A &lt;video&gt; element is used for playing videos or movies.
 * 
 * 
 * 
 * 
 * @author David Négrier <david@mouf-php.com>
 */
class Video implements HtmlElementInterface {
	use ChildrenTrait;
	use GlobalAttributesTrait;

    /**
	 * The URL for the video. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getSrc() {
		return $this->attributes['src'];
	}
	
	/**
	 * The URL for the video. 
	 * 
	 * @param string|ValueInterface $src
	 * @return static
	 */
	public function setSrc($src) {
		$this->attributes['src'] = $src;
		return $this;
	}
    /**
	 * "autoplay" or "" (empty string) or empty
	 * Instructs the UA to automatically begin playback of the video as soon as it can do so without stopping. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getAutoplay() {
		return $this->attributes['autoplay'];
	}
	
	/**
	 * "autoplay" or "" (empty string) or empty
	 * Instructs the UA to automatically begin playback of the video as soon as it can do so without stopping. 
	 * 
	 * @param string|ValueInterface $autoplay
	 * @return static
	 */
	public function setAutoplay($autoplay) {
		$this->attributes['autoplay'] = $autoplay;
		return $this;
	}
    /**
	 * "none" or "metadata" or "auto" or "" (empty string) or empty
	 * Represents a hint to the UA about whether optimistic downloading of the video itself or its metadata is considered worthwhile.
	 * 
	 *     "none": Hints to the UA that the user is not expected to need the video, or that minimizing unnecessary traffic is desirable.
	 *     "metadata": Hints to the UA that the user is not expected to need the video, but that fetching its metadata (dimensions, first frame, track list, duration, and so on) is desirable.
	 *     "auto": Hints to the UA that optimistically downloading the entire video is considered desirable.
	 *     Specifying the empty string is equivalent to specifying the value "auto". 
	 * 
	 * @return string|ValueInterface
	 */
	public function getPreload() {
		return $this->attributes['preload'];
	}
	
	/**
	 * "none" or "metadata" or "auto" or "" (empty string) or empty
	 * Represents a hint to the UA about whether optimistic downloading of the video itself or its metadata is considered worthwhile.
	 * 
	 *     "none": Hints to the UA that the user is not expected to need the video, or that minimizing unnecessary traffic is desirable.
	 *     "metadata": Hints to the UA that the user is not expected to need the video, but that fetching its metadata (dimensions, first frame, track list, duration, and so on) is desirable.
	 *     "auto": Hints to the UA that optimistically downloading the entire video is considered desirable.
	 *     Specifying the empty string is equivalent to specifying the value "auto". 
	 * 
	 * @param string|ValueInterface $preload
	 * @return static
	 */
	public function setPreload($preload) {
		$this->attributes['preload'] = $preload;
		return $this;
	}
    /**
	 * "controls" or "" (empty string) or empty
	 * Instructs the UA to expose a user interface for controlling playback of the video. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getControls() {
		return $this->attributes['controls'];
	}
	
	/**
	 * "controls" or "" (empty string) or empty
	 * Instructs the UA to expose a user interface for controlling playback of the video. 
	 * 
	 * @param string|ValueInterface $controls
	 * @return static
	 */
	public function setControls($controls) {
		$this->attributes['controls'] = $controls;
		return $this;
	}
    /**
	 * "loop" or "" (empty string) or empty
	 * Instructs the UA to seek back to the start of the video upon reaching the end. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getLoop() {
		return $this->attributes['loop'];
	}
	
	/**
	 * "loop" or "" (empty string) or empty
	 * Instructs the UA to seek back to the start of the video upon reaching the end. 
	 * 
	 * @param string|ValueInterface $loop
	 * @return static
	 */
	public function setLoop($loop) {
		$this->attributes['loop'] = $loop;
		return $this;
	}
    /**
	 * URL potentially surrounded by spaces
	 * The address of an image file for the UA to show while no video data is available. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getPoster() {
		return $this->attributes['poster'];
	}
	
	/**
	 * URL potentially surrounded by spaces
	 * The address of an image file for the UA to show while no video data is available. 
	 * 
	 * @param string|ValueInterface $poster
	 * @return static
	 */
	public function setPoster($poster) {
		$this->attributes['poster'] = $poster;
		return $this;
	}
    /**
	 * The height of the video, in CSS pixels. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getHeight() {
		return $this->attributes['height'];
	}
	
	/**
	 * The height of the video, in CSS pixels. 
	 * 
	 * @param string|ValueInterface $height
	 * @return static
	 */
	public function setHeight($height) {
		$this->attributes['height'] = $height;
		return $this;
	}
    /**
	 * The width of the video, in CSS pixels. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getWidth() {
		return $this->attributes['width'];
	}
	
	/**
	 * The width of the video, in CSS pixels. 
	 * 
	 * @param string|ValueInterface $width
	 * @return static
	 */
	public function setWidth($width) {
		$this->attributes['width'] = $width;
		return $this;
	}
    /**
	 * "muted" or "" (empty string) or empty
	 * Represents the default state of the audio channel of the video, potentially overriding user preferences. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getMuted() {
		return $this->attributes['muted'];
	}
	
	/**
	 * "muted" or "" (empty string) or empty
	 * Represents the default state of the audio channel of the video, potentially overriding user preferences. 
	 * 
	 * @param string|ValueInterface $muted
	 * @return static
	 */
	public function setMuted($muted) {
		$this->attributes['muted'] = $muted;
		return $this;
	}
    /**
	 * Instructs the UA to link multiple videos and/or audio streams together. 
	 * 
	 * @return string|ValueInterface
	 */
	public function getMediagroup() {
		return $this->attributes['mediagroup'];
	}
	
	/**
	 * Instructs the UA to link multiple videos and/or audio streams together. 
	 * 
	 * @param string|ValueInterface $mediagroup
	 * @return static
	 */
	public function setMediagroup($mediagroup) {
		$this->attributes['mediagroup'] = $mediagroup;
		return $this;
	}
	/**
	 * Renders the object in HTML.
	 * The Html is echoed directly into the output.
	 */
	public function toHtml() {
		echo '<video '.$this->getAttributes().'>'.$this->renderChildren().'</video>';
	}
}