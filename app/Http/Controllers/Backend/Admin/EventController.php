<?php

namespace App\Http\Controllers\Backend\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Enums\UserRolesEnum;
use App\Models\{Event, User};
use App\Helpers\UploadFiles;
use App\Http\Requests\Backend\EventRequest;

class EventController extends Controller
{
    protected $model;
    protected $user;

    public function __construct(Event $model, User $user)
    {
        $this->model = $model;
        $this->user = $user;
    }
    
    public function index()
    {
        $events = $this->model::all();
        return view('backend.admin.event.list', compact('events'));
    }

    
    public function create()
    {
        $organizers = $this->user::where('role', UserRolesEnum::ORGANIZER)->get();
        return view('backend.admin.event.create', compact('organizers'));
    }

    
    public function store(EventRequest $request)
    {
        try {
            $data = $request->validated();
            $this->model::Create([
                'organizer_id' => $data['organizer_id'],
                'title'        => $data['title'],
                'description'  => $data['description'],
                'date'         => $data['date'],
                'start_time'   => $data['start_time'],
                'end_time'     => $data['end_time'],
                'price'        => $data['price'],
                'location'     => $data['location'],
                'image'        => UploadFiles::upload($data['image'], 'image', 'eventImage')
            ]);
            return redirect()->route('admin.events.index')->with('success', 'Event added succesfully');
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
        try {
            $organizers = $this->user::where('role', UserRolesEnum::ORGANIZER)->get();
            $event = $this->model::findOrFail($id);
            return view('backend.admin.event.update', compact('organizers', 'event'));
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $th->getMessage());
        }
    }

    
    public function update(Request $request, string $id)
    {
        try {
            $event = $this->model::findOrFail($id);
            $update = $event->update([
                'organizer_id' => $request->organizer_id ?? $event->organizer_id,
                'title'        => $request->title ?? $event->title,
                'description'  => $request->description ?? $event->description,
                'date'         => $request->date ?? $event->date,
                'start_time'   => $request->start_time ?? $event->start_time,
                'end_time'     => $request->end_time ?? $event->end_time,
                'price'        => $request->price ?? $event->price,
                'location'     => $request->location ?? $event->location,
                'image'        => UploadFiles::upload($request->image, 'image', 'eventImage') ?? $event->image
            ]);
            return redirect()->route('admin.events.index')->with('success', 'Event updated');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', 'Something went wrong: ' . $th->getMessage());
        }
    }

    
    public function destroy(string $id)
    {
        //
    }
}
