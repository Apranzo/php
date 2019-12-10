<?php
require_once 'Color.class.php';
class Vertex {

	public static $verbose = FALSE;

	private $_x;
	private $_y;
	private $_z;
	private $_w;
	private $_color;


	public function __construct($arg) {
		$this->_x = floatval($arg['x']);
		$this->_y = floatval($arg['y']);
		$this->_z = floatval($arg['z']);
		$this->_w = array_key_exists('w', $arg) ? $arg['w'] : 1;
		if (Vertex::$verbose === true)	{
			printf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f",
				$this->_x, $this->_y, $this->_z, $this->_w);
			if (isset($arg['color'])) {
				printf(", %s ) constructed\n", $arg['color']);
			}
			else { print " ) constructed\n";}
		}
//		$this->_color = array_key_exists('color', $arg) ? $arg['color'] : new Color(['rgb' => 0xFFFFFF]);

	}

	/**
	 * @return Color
	 */
	public function getColor() {
		return $this->_color;
	}

	/**
	 * @param Color $color
	 */
	public function setColor(Color $color) {
		$this->_color = $color;
	}
	/**
	 * @return mixed
	 */
	public function getX() {
		return $this->_x;
	}

	/**
	 * @param mixed $x
	 * @return Vertex
	 */
	public function setX($x) {
		$this->_x = $x;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getY() {
		return $this->_y;
	}

	/**
	 * @param mixed $y
	 * @return Vertex
	 */
	public function setY($y) {
		$this->_y = $y;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getZ() {
		return $this->_z;
	}

	/**
	 * @param mixed $z
	 * @return Vertex
	 */
	public function setZ($z) {
		$this->_z = $z;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getW() {
		return $this->_w;
	}

	/**
	 * @param mixed $w
	 * @return Vertex
	 */
	public function setW($w) {
		$this->_w = $w;
		return $this;
	}

	private function toArray() {
		$arr['x'] = $this->_x;
		$arr['y'] = $this->_y;
		$arr['z'] = $this->_z;
		$arr['w'] = $this->_w;
		$arr['color'] = $this->_color;
		return $arr;
	}

	public function __Destruct() {
		if (Vertex::$verbose === true) {
			printf("Vertex( x: %.2f, y: %.2f, z:%.2f, w:%.2f, %s ) destructed\n",
				$this->_x, $this->_y, $this->_z, $this->_w, $this->_color);
		}
	}

	public function __toString() {
		return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, %s )",
			array($this->_x, $this->_y, $this->_z, $this->_w, $this->_color)));
	}

	public static function doc() {
		return (file_get_contents('Vertex.doc.txt'));
	}
}