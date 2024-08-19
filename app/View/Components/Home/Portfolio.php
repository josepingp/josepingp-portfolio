<?php

namespace App\View\Components\Home;

use Arr;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Portfolio extends Component
{
	public array $items = [];

	public array $tabs = [];

	/**
	 * Create a new component instance.
	 */
	public function __construct()
	{
		$this->items = [
			[
				'category' => ['Diseño web', 'SEO', 'Transformacion digital'],
				'title' => 'Studio de yoga Nana',
				'image' => url('/img/hero.png'),
				'url' => url('/'),
				'tags' => ['Diseño web', 'SEO', 'Transformacion digital'],
				'alt' => 'Studio de yoga Nana',
				'github' => url('/'),
			],
			[
				'category' => ['Diseño web', 'SEO', 'Transformacion digital'],
				'title' => 'Studio de yoga Nana',
				'image' => url('/img/hero.png'),
				'url' => url('/'),
				'tags' => ['Diseño web', 'SEO', 'Transformacion digital'],
				'alt' => 'Studio de yoga Nana',
				'github' => url('/'),
			],
			[
				'category' => ['Diseño web', 'SEO', 'Transformacion digital'],
				'title' => 'Studio de yoga Nana',
				'image' => url('/img/hero.png'),
				'url' => url('/'),
				'tags' => ['Diseño web', 'SEO', 'Transformacion digital'],
				'alt' => 'Studio de yoga Nana',
				'github' => url('/'),
			],
			[
				'category' => ['Diseño web', 'SEO'],
				'title' => 'Studio de yoga Nana',
				'image' => url('/img/hero.png'),
				'url' => url('/'),
				'tags' => ['Diseño web'],
				'alt' => 'Studio de yoga Nana',
				'github' => url('/'),
			],
			[
				'category' => ['Diseño web', 'SEO'],
				'title' => 'Studio de yoga Nana',
				'image' => url('/img/hero.png'),
				'url' => url('/'),
				'tags' => ['Diseño web', 'SEO', 'Transformacion digital'],
				'alt' => 'Studio de yoga Nana',
				'github' => url('/'),
			],
		];

		$this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));

	}

	/**
	 * Get the view / contents that represent the component.
	 */
	public function render(): View|Closure|string
	{
		return view('components.home.portfolio');
	}
}
