<?php
//
//class Color {
//	public static $verbose = FALSE;
//
//	private $_red;
//	private $_green;
//	private $_blue;
//
//
//	public function __construct($arg) {
//		if (array_key_exists('rgb', $arg)) {
//			$this->_red = intval($arg['rgb'] >> 16) & 255;
//			$this->_green = intval($arg['rgb'] >> 8) & 255;
//			$this->_blue = intval($arg['rgb']) & 255;
//		} else if (array_key_exists('red', $arg) && array_key_exists('blue', $arg) && array_key_exists('green', $arg)) {
//			$this->_red = intval($arg['red']);
//			$this->_green = intval($arg['green']);
//			$this->_blue = intval($arg['blue']);
//		}
//		if (self::$verbose === true)	{
//			printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n",
//				$this->_red, $this->_green, $this->_blue);
//		}
//	}
//
//	public function add(Color $color) {
//		$arr = $color->toArray();
//		$arr['red'] = ($this->_red + $arr['red']);
//		$arr['green'] = ($this->_green + $arr['green']);
//		$arr['blue'] = ($this->_blue + $arr['blue']);
//		return new Color($arr);
//	}
//
//	public function sub(Color $color) {
//		$arr = $color->toArray();
//		$arr['red'] = ($this->_red - $arr['red']);
//		$arr['green'] = ($this->_green - $arr['green']);
//		$arr['blue'] = ($this->_blue - $arr['blue']);
//		return new Color($arr);
//	}
//
//	public function mult($f) {
//		$arr['red'] = ($this->_red * $f);
//		$arr['green'] = ($this->_green * $f);
//		$arr['blue'] = ($this->_blue * $f);
//		return new Color($arr);
//	}
//
//	private function toArray() {
//		$arr['red'] = $this->_red;
//		$arr['green'] = $this->_green;
//		$arr['blue'] = $this->_blue;
//		return $arr;
//	}
//
//	public function __Destruct() {
//		if (self::$verbose === true) {
//			printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n",
//				$this->_red, $this->_green, $this->_blue);
//		}
//	}
//
//	public function __toString() {
//		return (vsprintf("Color( red: %3d, green: %3d, blue: %3d )",
//			array ($this->_red, $this->_green, $this->_blue)));
//	}
//
//	public static function doc() {
//		return (file_get_contents('Color.doc.txt'));
//	}
//}