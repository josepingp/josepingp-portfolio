<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class PortfolioItem extends Component
{
	/**
	 * Create a new component instance.
	 */
	public function __construct(public string $title, public string $image, public array $categories, public string $url, public string $alt)
	{

	}

	/**
	 * Get the view / contents that represent the component.
	 */
	public function render(): View|Closure|string
	{
		return view('components.portfolio-item');
	}
}
