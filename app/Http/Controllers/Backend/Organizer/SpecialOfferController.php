<?php

namespace App\Http\Controllers\Backend\Organizer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\{SpecialOffer, User, Event};
use App\Http\Requests\Backend\Organizer\SpecialOfferRequest;

class SpecialOfferController extends Controller
{
    protected $model;
    protected $user;
    protected $event;

    public function __construct(SpecialOffer $model, User $user, Event $event)
    {
        $this->model = $model;
        $this->user = $user;
        $this->event = $event;
    }
    
    public function index()
    {
        $offers = $this->model::where('organizer_id', auth()->user()->id)->get();
        return view('backend.organizer.offer.list', compact('offers'));
    }

    
    public function create()
    {
        $events = $this->event::where('organizer_id', auth()->user()->id)->get();
        return view('backend.organizer.offer.create', compact('events'));
    }

    
    public function store(SpecialOfferRequest $request)
    {
        try {
            $data = $request->validated();
            $this->model::create([
                'organizer_id' => auth()->user()->id,
                'event_id'     => $data['event_id'],
                'title'        => $data['title'],
                'description'  => $data['description'],
                'start_date'   => $data['start_date'],
                'end_date'     => $data['end_date'],
                'discount_percentage' => $data['discount_percentage'],
            ]);
            return redirect()->route('organizer.special_offers.index')->with('success', 'Offer added succesfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $th->getMessage());
        }
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        $events = $this->event::where('organizer_id', auth()->user()->id)->get();
        $offer = $this->model::findOrFail($id);
        return view('backend.organizer.offer.update', compact('events', 'offer'));
    }

    
    public function update(Request $request, string $id)
    {
        try {
            $offer = $this->model::findOrFail($id);
            $update = $offer->update([
                'event_id'     => $request->event_id ?? $offer->event_id,
                'title'        => $request->title ?? $offer->title,
                'description'  => $request->description ?? $offer->description,
                'start_date'   => $request->start_date ?? $offer->start_date,
                'end_date'     => $request->end_date ?? $offer->end_date,
                'discount_percentage' => $request->discount_percentage ?? $offer->discount_percentage,
            ]);
            return redirect()->route('organizer.special_offers.index')->with('success', 'Offer updated succesfully');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $th->getMessage());
        }
    }

    
    public function destroy(string $id)
    {
        //
    }
}
