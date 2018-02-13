<?php

	require_once 'Color.class.php';

	Class Vertex
	{

		private $_x;		//Creation des attributs
		private $_y;
		private $_z;
		private $_w = 1;
		private $_color;	// Coordonnees homogenes
		static $verbose = False;


		public function __construct( $coord_xyzc ) {
			$this->_x = $coord_xyzc['x'];
			$this->_y = $coord_xyzc['y'];
			$this->_z = $coord_xyzc['z'];

			// VERIF `w` OPTIONNEL
			if ( isset( $coord_xyzc['w'] ) && !empty($coord_xyzc['w'] ) )
				$this->_w = $coord_xyzc['w'];

			// VERIF `color` IS NOT EMPTY or NULL, AND IS AN INSTANCE OF `Color`
			if (isset( $coord_xyzc['color'] ) && !empty( $coord_xyzc['color'] ) && $coord_xyzc['color'] instanceof Color ) {
				$this->_color = $coord_xyzc['color'];

			// IF NOT, MAKE A NEW INSTANCE WITH WHITE COLOR
			} else {
				$this->_color = new Color(array('red' => 255, 'green' => 255, 'blue' => 255));
			}

			// CONSTRUCTOR INFORMATION, IF VERBOSE MODE `TRUE`
			if ( Self::$verbose )
				//.     Vertex( x: 0.00,  y: 0.00,  z:0.00,  w:1.00,  Color( red: 255, green: 255, blue: 255 ) ) constructed
				printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
		}
		function __destruct() {
			// DESTRUCTOR INFORMATION, IF VERBOSE MODE `TRUE`
			if ( Self::$verbose )
				//.     Vertex( x: 9.00,  y: 9.00,  z:9.00,  w:3.00,  Color( red: 255, green: 255, blue: 255 ) ) destructed
				printf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue);
		}


		// getter & setter ####### FOR COLOR #######################
		public function getColor() {
			return $this->_color;
		}
		public function setColor($color) {
			$this->_color = $color;
		}


		// getter & setter ####### FOR X ##########################
		public function getX() {
			return $this->_x;
		}
		public function setX($x) {
			$this->_x = $x;
		}


		// getter & setter ####### FOR Y ##########################
		public function getY() {
			return $this->_y;
		}
		public function setY($y) {
			$this->_y = $y;
		}


		// getter & setter ####### FOR Z ##########################
		public function getZ() {
			return $this->_z;
		}
		public function setZ($z) {
			$this->_z = $z;
		}

		// getter & setter ####### FOR W ##########################
		public function getW() {
			return $this->_w;
		}
		public function setW($w) {
			$this->_w = $w;
		}



		function __toString() {
			if (Self::$verbose) {
				// vsprintf takes array as input and returns a string. `f` for float. `0` for null values as zeros
				//                Vertex( x: 1.00,  y: 0.00,  z:0.00,  w:1.00,  Color( red:   0, green: 255, blue:   0 ) )
				return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f, Color( red: %3d, green: %3d, blue: %3d ) )", array($this->_x, $this->_y, $this->_z, $this->_w, $this->_color->red, $this->_color->green, $this->_color->blue)));
			}
			//                Vertex( x: 0.00,  y: 0.00,  z:0.00,  w:1.00 )
			return (vsprintf("Vertex( x: %0.2f, y: %0.2f, z:%0.2f, w:%0.2f )", array($this->_x, $this->_y, $this->_z, $this->_w)));
		}

		public static function doc() {
			$doc = file_get_contents('Vertex.doc.txt');
			if ($doc)
			{
				echo PHP_EOL;
				echo $doc;
				echo PHP_EOL;
			}
		}
	}
?>