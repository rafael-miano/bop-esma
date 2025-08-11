<?php

namespace App\Livewire\Attendees;

use App\Models\Attendee;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;

#[Layout('layouts.app')]
class TableList extends Component
{
    use WithPagination;

    public $search = '';
    public $filterDate = 'today';

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function updatedFilterDate()
    {
        $this->resetPage();
    }

    public function render()
    {
        $searchTerm = '%' . $this->search . '%';

        $query = Attendee::query()
            ->where(function ($query) use ($searchTerm) {
                $query->where('full_name', 'like', $searchTerm)
                    ->orWhere('mobile_number', 'like', $searchTerm)
                    ->orWhere('email', 'like', $searchTerm)
                    ->orWhereRaw("DATE_FORMAT(date_of_birth, '%M %e, %Y') LIKE ?", [$searchTerm]);
            });

        $now = Carbon::now('Asia/Manila');

        $startOfTodayUTC = $now->copy()->startOfDay()->timezone('UTC');
        $endOfTodayUTC = $now->copy()->endOfDay()->timezone('UTC');

        if ($this->filterDate === 'today') {
            $query->whereBetween('created_at', [$startOfTodayUTC, $endOfTodayUTC]);
        } else {
            $query->where('created_at', '<', $startOfTodayUTC);
        }

        $attendees = $query->latest()->paginate(10);

        return view('livewire.attendees.table-list', compact('attendees'));
    }

}
