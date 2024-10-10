<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Tamu;
use App\Models\Ucapan;
use Carbon\Carbon;

class WeddingWishes extends Component
{
    public $tamu;
    public $wishes = '';  // Initialize the wishes variable as an empty string
    public $weddingWishes = [];

    protected $rules = [
        'wishes' => 'required|string|max:1000',
    ];

    public function mount($tamu_uniquecode)
    {
        // Find the guest by unique code and load their information
        $this->tamu = Tamu::where('tamu_uniquecode', $tamu_uniquecode)->firstOrFail();

        // Load all existing wedding wishes
        $this->weddingWishes = Ucapan::latest()->get();
    }

    public function submitWishes()
    {
        // Validate the input data
        $this->validate();
        dd([
            'Guest Unique Code' => $this->tamu->tamu_uniquecode,
            'Wish' => $this->wishes
        ]);
        // Save the wedding wish with the guest's unique code
        Ucapan::create([
            'ucapan_tamu' => $this->tamu->tamu_uniquecode,
            'ucapan_isiucapan' => $this->wishes,
            'ucapan_date' => Carbon::now(),
        ]);

        // Clear the textarea
        $this->reset('wishes');

        // Reload the wishes to include the newly added one
        $this->weddingWishes = Ucapan::latest()->get();

        // Emit an event to notify of the new wish addition
        $this->emit('newWishAdded');
    }

    public function render()
    {
        return view('livewire.wedding-wishes');
    }
}
