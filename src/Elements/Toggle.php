<?php

namespace twa\uikit\Elements;

use Livewire\Attributes\Modelable;
use Livewire\Component;

class Toggle extends Component
{    
    #[Modelable]
    public $value;
    public $info;
    
    public function render()
    {
        return view('UIKitView::components.form.toggle');
    }
}
