<?php

	class Curso {
		protected $nombreCurso;
		protected $codigoCurso;


		public function __construct(string $elNombreCurso, int $elCodigoCurso)
		{
			$this->setNombre($elNombreCurso);
			$this->setCodigo($elCodigoCurso);
			}


			public function setNombre($elNombreCurso) {
				$this->nombre = $elNombreCurso;
			}

			public function getNombre() {
				return $this->nombre;
			}

			public function setCodigo($elCodigoCurso) {
				$this->codigo = $elCodigoCurso;
			}

			public function getCodigo() {
				return $this->codigo;
			}
	}
