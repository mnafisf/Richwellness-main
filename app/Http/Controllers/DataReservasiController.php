<?php

namespace App\Http\Controllers;

use App\Models\DataReservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DataReservasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('resepsionis.dataReservasi', [
            'dataReservasi' => DataReservasi::latest()->get()
        ]);
    }
    public function cari(Request $request)
    {
        // Menangkap data pencarian
        $cari = $request->cari;
    
        // Mengambil data dari table pemesanan sesuai pencarian data
        $dataReservasi = DataReservasi::where('nama_tamu', 'like', "%" . $cari . "%")->paginate();
    
        // Mengirim data reservasi ke view
        return view('resepsionis.dataReservasi', ['dataReservasi' => $dataReservasi]);
    }
    

    public function tanggal(Request $request)
    {
        // menangkap data pencarian
        $fromdate = $request->fromdate;
        $todate = $request->todate;

        // mengambil data dari table pegawai sesuai pencarian data
        $dataReservasi = DB::table('pemesanan')
            ->where('tgl_check_in', 'like', "%" . $fromdate . "%")
            ->where('tgl_check_out', 'like', "%" . $todate . "%")
            ->paginate();

        // mengirim data pegawai ke view index
        return view('resepsionis.dataReservasi', ['dataReservasi' => $dataReservasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $dataReservasi = DataReservasi::findOrFail($id);
        return view('resepsionis.edit', compact('dataReservasi'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_tamu' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'tipe_kamar' => 'required|string|max:255',
            'nik' => 'required|string|max:255',
            'tgl_check_in' => 'required|date',
            'tgl_check_out' => 'required|date',
        ]);

        $dataReservasi = DataReservasi::findOrFail($id);
        $dataReservasi->update($request->all());

        return redirect('/dataReservasi')->with('success', 'Data reservasi berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataReservasi = DataReservasi::findOrFail($id);
        $dataReservasi->delete();

        return redirect('/dataReservasi')->with('success', 'Data reservasi berhasil dihapus.');
    }

    /**
     * Process check-in for a reservation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function processCheckIn($id)
    {
        try {
            $reservation = DataReservasi::findOrFail($id);
            $reservation->status_checkin = 'checked_in';
            $reservation->checkin_at = now();
            $reservation->save();
            
            return response()->json([
                'success' => true,
                'message' => 'Check-in berhasil diproses'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Process check-out for a reservation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function processCheckOut($id)
    {
        try {
            $reservation = DataReservasi::findOrFail($id);
            $reservation->status_checkin = 'checked_out';
            $reservation->checkout_at = now();
            $reservation->save();
            
            return response()->json([
                'success' => true,
                'message' => 'Check-out berhasil diproses'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Process payment for a reservation.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function processPayment(Request $request, $id)
    {
        try {
            $reservation = DataReservasi::findOrFail($id);
            $reservation->status_pembayaran = 'paid';
            $reservation->payment_amount = $request->amount;
            $reservation->payment_method = $request->method;
            $reservation->payment_notes = $request->notes;
            $reservation->payment_date = now();
            $reservation->save();
            
            return response()->json([
                'success' => true,
                'message' => 'Pembayaran berhasil diproses'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage()
            ]);
        }
    }

    /**
     * Print invoice for a reservation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function printInvoice($id)
    {
        $reservation = DataReservasi::findOrFail($id);
        return view('resepsionis.invoice', compact('reservation'));
    }
}
