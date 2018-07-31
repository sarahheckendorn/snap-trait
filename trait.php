<?php

class Instrument {
	protected $strings;

	public function __construct(string $newStrings) {
		$this->setStrings($newStrings);
	}

	public function getStrings(): string {
		return($this->strings);
	}

	public function setStrings(string $newStrings): void {
		$this->strings = $newStrings;
	}
}

trait Tuning {
	protected $outOfTune;

	public function getOutOfTune(): bool {
		return ($this->outOfTune);
	}

	public function setOutOfTune(bool $newOutOfTune): void {
		$this->outOfTune = $newOutOfTune;
	}

	public function run(): void {
		if($this->outOfTune === true) {
			echo "TUNE THE INSTRUMENT FOOL" . PHP_EOL;
		} else {
			echo "You're fine, keep playing" . PHP_EOL;
		}
	}
}

class Violin extends Instrument {
	use
}