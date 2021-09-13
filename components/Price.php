<?php namespace ElenStar\Offers\Components;

use Cms\Classes\ComponentBase;

class Price extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'Price Component',
            'description' => 'Установка цен на корты'
        ];
    }

    public function defineProperties()
    {
        return [
            'price' => [
                'title' => 'Цены',
                'description' => 'Установите цены',
                'type' => 'dropdown'
            ]
        ];
    }

    public function getPriceOptions(): array
    {
        return \ElenStar\Offers\Models\Price::lists('title', 'id');
    }

    public function onRun(): void
    {
        $this->page['offers'] = \ElenStar\Offers\Models\Price::find($this->property('price'));
    }
}
