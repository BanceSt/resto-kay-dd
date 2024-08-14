<?php

namespace App\Livewire;

use Livewire\Component;

class TableInput extends Component
{
    public $limit = 4;
    public $n_tables = 1;

    public function add_table() {

        if ($this->limit >= ($this->n_tables + 1))
        {
            $this->n_tables++;
        }
    }

    public function suppr_table() {
        if ($this->n_tables > 1) {
            $this->n_tables--;
        }
    }

    public function render()
    {
        return view('livewire.table-input');
    }
}
