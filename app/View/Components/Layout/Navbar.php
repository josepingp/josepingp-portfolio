<?php

namespace App\View\Components\Layout;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
	public array $navigationItems = [];

	/**
	 * Create a new component instance.
	 */
	public function __construct()
	{
		$this->navigationItems = [
			['label' => 'Sobre mi', 'href' => '#about'],
			['label' => 'Proyectos', 'href' => '#portfolio'],
			['label' => 'Contacto', 'href' => '#contact'],
			['label' => 'CV', 'href' => '/cv']
		];
	}

	/**
	 * Get the view / contents that represent the component.
	 */
	public function render(): View|Closure|string
	{
		return view('layout.navbar');
	}
}
