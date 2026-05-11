namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = Booking::with('room')->latest()->get();
        return view('bookings.index', compact('bookings'));
    }

    public function create()
    {
        $rooms = Room::where('status', 'available')->get();
        return view('bookings.create', compact('rooms'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'room_id' => 'required',
            'guest_name' => 'required',
            'check_in' => 'required',
            'check_out' => 'required'
        ]);

        // ❗ DOUBLE BOOKING CHECK
        $exists = Booking::where('room_id', $request->room_id)
            ->where(function ($q) use ($request) {
                $q->whereBetween('check_in', [$request->check_in, $request->check_out])
                  ->orWhereBetween('check_out', [$request->check_in, $request->check_out]);
            })->exists();

        if ($exists) {
            return back()->with('error', 'Room already booked in selected dates');
        }

        Booking::create($request->all());

        return redirect()->route('bookings.index');
    }

    public function edit($id)
    {
        $booking = Booking::findOrFail($id);
        $rooms = Room::all();

        return view('bookings.edit', compact('booking', 'rooms'));
    }

    public function update(Request $request, $id)
    {
        $booking = Booking::findOrFail($id);

        $booking->update($request->all());

        return redirect()->route('bookings.index');
    }

    public function destroy($id)
    {
        Booking::findOrFail($id)->delete();

        return redirect()->route('bookings.index');
    }
}