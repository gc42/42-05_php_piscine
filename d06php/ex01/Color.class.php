<?php

	Class Color
	{

		public $red;		//Creation des attributs
		public $green;
		public $blue0;
		static $verbose = False;

		public function __construct( $kwargs )
		{
			if (isset($kwargs['red']) && isset($kwargs['green']) && isset($kwargs['blue'])) {
				$this->red		= intval($kwargs['red']);
				$this->green	= intval($kwargs['green']);
				$this->blue		= intval($kwargs['blue']);
			}

			else if (isset($kwargs['rgb'])) {
				$rgb			= intval($kwargs["rgb"]);
				$this->red		= $rgb / (2 ** 16) % 256;
				$this->green 	= $rgb / (2 **  8) % 256;
				$this->blue     = $rgb / (2 **  0) % 256;

				// $this->red    = $rgb << 8  >> 24; //Tentative infructueuse par shift des bits
				// $this->green  = $rgb << 16 >> 24;
				// $this->blue   = $rgb << 24 >> 24;
			}
			if (Self::$verbose) {
				//      Color( red: 255, green: 255, blue: 255 ) constructed.
				printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.\n", $this->red, $this->green, $this->blue);
			}
		}

		public function __destruct()
		{
			if (Self::$verbose)
				//      Color( red: 255, green: 255, blue: 255 ) destructed.
				printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.\n", $this->red, $this->green, $this->blue);
		}


		public function add( $rhs ) {
			return (new Color( array('red' => $this->red + $rhs->red, 'green' => $this->green + $rhs->green, 'blue' => $this->blue + $rhs->blue)));
		}


		public function sub( $rhs ) {
			return (new Color( array('red' => $this->red - $rhs->red, 'green' => $this->green - $rhs->green, 'blue' => $this->blue - $rhs->blue)));
		}


		public function mult( $f ) {
			return (new Color( array('red' => $this->red * $f, 'green' => $this->green * $f, 'blue' => $this->blue * $f)));
		}



		function __toString() {
			//       random: Color( red:  12, green:  31, blue:  23 ).     //vsprintf retourne une chaine formatee et prends un tableau as argument
			return vsprintf("Color( red: %3d, green: %3d, blue: %3d )", array($this->red, $this->green, $this->blue));
		}

		public static function doc() {
			$doc = file_get_contents('Color.doc.txt');
			if ($doc)
			{
				echo PHP_EOL;
				echo $doc;
				echo PHP_EOL;
			}
		}

	}
?>