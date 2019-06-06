<?php

	class Alumno {
		protected $nombre;
		protected $apellido;
		protected $codigo;

		public function __construct(string $elNombre, string $elApellido, int $elCodigo)
		{
			$this->setNombre($elNombre);
			$this->setApellido($elApellido);
			$this->setCodigo($elCodigo);
			}
		}

			public function setNombre($elNombre) {
				$this->nombre = $elNombre;
			}

			public function getNombre() {
				return $this->nombre;
			}

			public function setApellido($elApellido) {
				$this->apellido = $elApellido;
			}

			public function getApellido() {
				return $this->apellido;
			}

			public function setCodigo($elCodigo) {
				$this->apellido = $elCodigo;
			}

			public function getCodigo() {
				return $this->codigo;
			}
