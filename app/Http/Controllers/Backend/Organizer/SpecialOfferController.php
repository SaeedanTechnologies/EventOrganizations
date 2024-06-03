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
        //
    }

    
    public function show(string $id)
    {
        //
    }

    
    public function edit(string $id)
    {
        //
    }

    
    public function update(Request $request, string $id)
    {
        //
    }

    
    public function destroy(string $id)
    {
        //
    }
}
