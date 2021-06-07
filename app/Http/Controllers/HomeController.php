<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $movie = DB::select('select * from movies limit 3');
        $comingsoon = DB::select('select * from comingsoon Order By id DESC limit 3');
        return view('home', ['movie'=>$movie], ['comingsoon'=>$comingsoon]);
    }

    public function adminHome()
    {
        $movie = DB::select('select * from movies');
        return view('adminHome', ['movie'=>$movie]);
    }

    public function adminHomeForm()
    {
        return view('form');
    }

    public function adminHomeUpdateForm($id)
    {
        $update = DB::table('movies')->where('id', $id)->first();
        return view('form', ['update'=>$update]);
    }

    public function adminHomeFormSubmit(Request $request)
    {
        // untuk validasi form
        $this->validate($request, [
            'title' => 'required',
            'year' => 'required',
            'starring' => 'required',
            'director' => 'required',
            'genre' => 'required',
            'poster' => 'required',
            'rating' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'trailer' => 'required'
        ]);
         
        $file = $request->file('poster');
        $folder = 'uploads';
        $name = $file->getClientOriginalName();
        $file->move($folder,$file->getClientOriginalName());

        DB::table('movies')->insert([
            'title' => $request->title,
            'year' => $request->year,
            'starring' => $request->starring,
            'director' => $request->director,
            'genre' => $request->genre,
            'poster' => $name,
            'rating' => $request->rating,
            'description' => $request->description,
            'duration' => $request->duration,
            'trailer' => $request->trailer
        ]);

        return redirect('/admin/home');
    }

    public function adminHomeFormUpdate(Request $request)
    {
        // untuk validasi form
        $this->validate($request, [
            'title' => 'required',
            'year' => 'required',
            'starring' => 'required',
            'director' => 'required',
            'genre' => 'required',
            'rating' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'trailer' => 'required'
        ]);

        $poste = 0;
        if($request->poster != NULL){
            $poste = 1;
            $file = $request->file('poster');
            $folder = 'uploads';
            $name = $file->getClientOriginalName();
            $file->move($folder,$file->getClientOriginalName());
        }

        if($poste != 0){
            DB::table('movies')->where('id',$request->id)->update([
            'title' => $request->title,
            'year' => $request->year,
            'starring' => $request->starring,
            'director' => $request->director,
            'genre' => $request->genre,
            'poster' => $name,
            'rating' => $request->rating,
            'description' => $request->description,
            'duration' => $request->duration,
            'trailer' => $request->trailer
            ]);
        } else {
            DB::table('movies')->where('id',$request->id)->update([
            'title' => $request->title,
            'year' => $request->year,
            'starring' => $request->starring,
            'director' => $request->director,
            'genre' => $request->genre,
            'rating' => $request->rating,
            'description' => $request->description,
            'duration' => $request->duration,
            'trailer' => $request->trailer
            ]);
        }
        return redirect('/admin/home');
    }

    public function adminHomeDelete($id)
    {
        DB::table('movies')->where('id', $id)->delete();
        return redirect('/admin/home');
    }

    public function adminComing()
    {
        $movie = DB::select('select * from comingsoon');
        return view('adminHome', ['movie'=>$movie]);
    }

    public function adminComingForm()
    {
        return view('form');
    }

    public function adminComingUpdateForm($id)
    {
        $update = DB::table('comingsoon')->where('id', $id)->first();
        return view('form', ['update'=>$update]);
    }

    public function adminComingFormSubmit(Request $request)
    {
        // untuk validasi form
        $this->validate($request, [
            'title' => 'required',
            'year' => 'required',
            'starring' => 'required',
            'director' => 'required',
            'genre' => 'required',
            'poster' => 'required',
            'rating' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'trailer' => 'required'
        ]);
         
        $file = $request->file('poster');
        $folder = 'uploads';
        $name = $file->getClientOriginalName();
        $file->move($folder,$file->getClientOriginalName());

        DB::table('comingsoon')->insert([
            'title' => $request->title,
            'year' => $request->year,
            'starring' => $request->starring,
            'director' => $request->director,
            'genre' => $request->genre,
            'poster' => $name,
            'rating' => $request->rating,
            'description' => $request->description,
            'duration' => $request->duration,
            'trailer' => $request->trailer
        ]);

        return redirect('/admin/coming');
    }

    public function adminComingFormUpdate(Request $request)
    {
        // untuk validasi form
        $this->validate($request, [
            'title' => 'required',
            'year' => 'required',
            'starring' => 'required',
            'director' => 'required',
            'genre' => 'required',
            'rating' => 'required',
            'description' => 'required',
            'duration' => 'required',
            'trailer' => 'required'
        ]);

        $poste = 0;
        if($request->poster != NULL){
            $poste = 1;
            $file = $request->file('poster');
            $folder = 'uploads';
            $name = $file->getClientOriginalName();
            $file->move($folder,$file->getClientOriginalName());
        }

        if($poste != 0){
            DB::table('comingsoon')->where('id',$request->id)->update([
            'title' => $request->title,
            'year' => $request->year,
            'starring' => $request->starring,
            'director' => $request->director,
            'genre' => $request->genre,
            'poster' => $name,
            'rating' => $request->rating,
            'description' => $request->description,
            'duration' => $request->duration,
            'trailer' => $request->trailer
            ]);
        } else {
            DB::table('comingsoon')->where('id',$request->id)->update([
            'title' => $request->title,
            'year' => $request->year,
            'starring' => $request->starring,
            'director' => $request->director,
            'genre' => $request->genre,
            'rating' => $request->rating,
            'description' => $request->description,
            'duration' => $request->duration,
            'trailer' => $request->trailer
            ]);
        }
        return redirect('/admin/coming');
    }

    public function adminComingDelete($id)
    {
        DB::table('comingsoon')->where('id', $id)->delete();
        return redirect('/admin/coming');
    }

    public function adminTicket()
    {
        $schedule = DB::select('select * from schedule');
        return view('adminHome', ['schedule'=>$schedule]);
    }

    public function adminTicketForm()
    {
        $movie = DB::select('select * from movies');
        return view('form', ['movie'=>$movie]);
    }

    public function adminTicketUpdateForm($id)
    {
        $update = DB::table('schedule')->where('id', $id)->first();
        return view('form', ['update'=>$update]);
    }

    public function adminTicketFormSubmit(Request $request)
    {
        // untuk validasi form
        $this->validate($request, [
            'title' => 'required',
            'screening' => 'required',
            'price' => 'required',
            'studio' => 'required'
        ]);

        DB::table('schedule')->insert([
            'title' => $request->title,
            'screening' => $request->screening,
            'price' => $request->price,
            'studio' => $request->studio
        ]);

        return redirect('/admin/ticket');
    }

    public function adminTicketFormUpdate(Request $request)
    {
        // untuk validasi form
        $this->validate($request, [
            'title' => 'required',
            'screening' => 'required',
            'price' => 'required',
            'studio' => 'required'
        ]);

        DB::table('schedule')->where('id',$request->id)->update([
            'title' => $request->title,
            'screening' => $request->screening,
            'price' => $request->price,
            'studio' => $request->studio
        ]);

        return redirect('/admin/ticket');
    }

    public function adminTicketDelete($id)
    {
        DB::table('schedule')->where('id', $id)->delete();
        return redirect('/admin/ticket');
    }

    public function info($name)
    {
        $info = DB::table('movies')->where('title', $name)->first();
        if($info == NULL){
            $info = DB::table('comingsoon')->where('title', $name)->first();
        }
        $schedule = DB::select('select * from schedule where title = "'.$name.'"');
        return view('info', ['info'=>$info], ['schedule'=>$schedule]);
    }

    public function booking($name, $id)
    {
        $booking = DB::table('schedule')->where('id', $id)->first();
        $A1 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%A1%')->get();
        $A2 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%A2%')->get();
        $A3 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%A3%')->get();
        $A4 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%A4%')->get();
        $A5 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%A5%')->get();
        $A6 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%A6%')->get();
        $A7 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%A7%')->get();
        $A8 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%A8%')->get();
        $A9 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%A9%')->get();
        $A10 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%A10%')->get();
        $A11 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%A11%')->get();
        $A12 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%A12%')->get();
        $B1 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%B1%')->get();
        $B2 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%B2%')->get();
        $B3 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%B3%')->get();
        $B4 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%B4%')->get();
        $B5 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%B5%')->get();
        $B6 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%B6%')->get();
        $B7 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%B7%')->get();
        $B8 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%B8%')->get();
        $B9 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%B9%')->get();
        $B10 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%B10%')->get();
        $B11 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%B11%')->get();
        $B12 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%B12%')->get();
        $C1 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%C1%')->get();
        $C2 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%C2%')->get();
        $C3 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%C3%')->get();
        $C4 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%C4%')->get();
        $C5 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%C5%')->get();
        $C6 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%C6%')->get();
        $C7 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%C7%')->get();
        $C8 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%C8%')->get();
        $C9 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%C9%')->get();
        $C10 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%C10%')->get();
        $C11 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%C11%')->get();
        $C12 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%C12%')->get();
        $D1 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%D1%')->get();
        $D2 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%D2%')->get();
        $D3 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%D3%')->get();
        $D4 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%D4%')->get();
        $D5 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%D5%')->get();
        $D6 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%D6%')->get();
        $D7 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%D7%')->get();
        $D8 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%D8%')->get();
        $D9 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%D9%')->get();
        $D10 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%D10%')->get();
        $D11 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%D11%')->get();
        $D12 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%D12%')->get();
        $E1 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%E1%')->get();
        $E2 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%E2%')->get();
        $E3 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%E3%')->get();
        $E4 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%E4%')->get();
        $E5 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%E5%')->get();
        $E6 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%E6%')->get();
        $E7 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%E7%')->get();
        $E8 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%E8%')->get();
        $E9 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%E9%')->get();
        $E10 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%E10%')->get();
        $E11 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%E11%')->get();
        $E12 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%E12%')->get();
        $F1 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%F1%')->get();
        $F2 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%F2%')->get();
        $F3 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%F3%')->get();
        $F4 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%F4%')->get();
        $F5 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%F5%')->get();
        $F6 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%F6%')->get();
        $F7 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%F7%')->get();
        $F8 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%F8%')->get();
        $F9 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%F9%')->get();
        $F10 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%F10%')->get();
        $F11 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%F11%')->get();
        $F12 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%F12%')->get();
        $G1 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%G1%')->get();
        $G2 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%G2%')->get();
        $G3 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%G3%')->get();
        $G4 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%G4%')->get();
        $G5 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%G5%')->get();
        $G6 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%G6%')->get();
        $G7 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%G7%')->get();
        $G8 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%G8%')->get();
        $G9 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%G9%')->get();
        $G10 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%G10%')->get();
        $G11 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%G11%')->get();
        $G12 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%G12%')->get();
        $H1 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%H1%')->get();
        $H2 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%H2%')->get();
        $H3 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%H3%')->get();
        $H4 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%H4%')->get();
        $H5 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%H5%')->get();
        $H6 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%H6%')->get();
        $H7 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%H7%')->get();
        $H8 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%H8%')->get();
        $H9 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%H9%')->get();
        $H10 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%H10%')->get();
        $H11 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%H11%')->get();
        $H12 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%H12%')->get();
        $I1 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%I1%')->get();
        $I2 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%I2%')->get();
        $I3 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%I3%')->get();
        $I4 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%I4%')->get();
        $I5 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%I5%')->get();
        $I6 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%I6%')->get();
        $I7 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%I7%')->get();
        $I8 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%I8%')->get();
        $I9 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%I9%')->get();
        $I10 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%I10%')->get();
        $I11 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%I11%')->get();
        $I12 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%I12%')->get();
        $J1 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%J1%')->get();
        $J2 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%J2%')->get();
        $J3 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%J3%')->get();
        $J4 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%J4%')->get();
        $J5 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%J5%')->get();
        $J6 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%J6%')->get();
        $J7 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%J7%')->get();
        $J8 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%J8%')->get();
        $J9 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%J9%')->get();
        $J10 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%J10%')->get();
        $J11 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%J11%')->get();
        $J12 = DB::table('schedule')->where('id', $id)->where('seats', 'LIKE', '%J12%')->get();
        return view('booking', ['booking'=>$booking])
        ->with('A1', $A1)
        ->with('A2', $A2)
        ->with('A3', $A3)
        ->with('A4', $A4)
        ->with('A5', $A5)
        ->with('A6', $A6)
        ->with('A7', $A7)
        ->with('A8', $A8)
        ->with('A9', $A9)
        ->with('A10', $A10)
        ->with('A11', $A11)
        ->with('A12', $A12)
        ->with('B1', $B1)
        ->with('B2', $B2)
        ->with('B3', $B3)
        ->with('B4', $B4)
        ->with('B5', $B5)
        ->with('B6', $B6)
        ->with('B7', $B7)
        ->with('B8', $B8)
        ->with('B9', $B9)
        ->with('B10', $B10)
        ->with('B11', $B11)
        ->with('B12', $B12)
        ->with('C1', $C1)
        ->with('C2', $C2)
        ->with('C3', $C3)
        ->with('C4', $C4)
        ->with('C5', $C5)
        ->with('C6', $C6)
        ->with('C7', $C7)
        ->with('C8', $C8)
        ->with('C9', $C9)
        ->with('C10', $C10)
        ->with('C11', $C11)
        ->with('C12', $C12)
        ->with('D1', $D1)
        ->with('D2', $D2)
        ->with('D3', $D3)
        ->with('D4', $D4)
        ->with('D5', $D5)
        ->with('D6', $D6)
        ->with('D7', $D7)
        ->with('D8', $D8)
        ->with('D9', $D9)
        ->with('D10', $D10)
        ->with('D11', $D11)
        ->with('D12', $D12)
        ->with('E1', $E1)
        ->with('E2', $E2)
        ->with('E3', $E3)
        ->with('E4', $E4)
        ->with('E5', $E5)
        ->with('E6', $E6)
        ->with('E7', $E7)
        ->with('E8', $E8)
        ->with('E9', $E9)
        ->with('E10', $E10)
        ->with('E11', $E11)
        ->with('E12', $E12)
        ->with('F1', $F1)
        ->with('F2', $F2)
        ->with('F3', $F3)
        ->with('F4', $F4)
        ->with('F5', $F5)
        ->with('F6', $F6)
        ->with('F7', $F7)
        ->with('F8', $F8)
        ->with('F9', $F9)
        ->with('F10', $F10)
        ->with('F11', $F11)
        ->with('F12', $F12)
        ->with('G1', $G1)
        ->with('G2', $G2)
        ->with('G3', $G3)
        ->with('G4', $G4)
        ->with('G5', $G5)
        ->with('G6', $G6)
        ->with('G7', $G7)
        ->with('G8', $G8)
        ->with('G9', $G9)
        ->with('G10', $G10)
        ->with('G11', $G11)
        ->with('G12', $G12)
        ->with('H1', $H1)
        ->with('H2', $H2)
        ->with('H3', $H3)
        ->with('H4', $H4)
        ->with('H5', $H5)
        ->with('H6', $H6)
        ->with('H7', $H7)
        ->with('H8', $H8)
        ->with('H9', $H9)
        ->with('H10', $H10)
        ->with('H11', $H11)
        ->with('H12', $H12)
        ->with('I1', $I1)
        ->with('I2', $I2)
        ->with('I3', $I3)
        ->with('I4', $I4)
        ->with('I5', $I5)
        ->with('I6', $I6)
        ->with('I7', $I7)
        ->with('I8', $I8)
        ->with('I9', $I9)
        ->with('I10', $I10)
        ->with('I11', $I11)
        ->with('I12', $I12)
        ->with('J1', $J1)
        ->with('J2', $J2)
        ->with('J3', $J3)
        ->with('J4', $J4)
        ->with('J5', $J5)
        ->with('J6', $J6)
        ->with('J7', $J7)
        ->with('J8', $J8)
        ->with('J9', $J9)
        ->with('J10', $J10)
        ->with('J11', $J11)
        ->with('J12', $J12);
    }

    public function bookingSubmit(Request $request)
    {
        // untuk validasi form
        $this->validate($request, [
            'title' => 'required',
            'email' => 'required',
            'seats' => 'required',
            'time' => 'required',
            'id' => 'required',
            'studio' => 'required'
        ]);
        
        DB::table('schedule')->where('id',$request->id)->update([
            'seats' => DB::raw('CONCAT(seats,",","'.$request->seats.'")')
        ]);

        DB::table('history')->insert([
            'email' => $request->email,
            'title' => $request->title,
            'seats' => $request->seats,
            'time' => $request->time,
            'studio' => $request->studio
        ]);
        echo '<script>alert("Success Membeli Tiket ~!"); window.location.href="/history/'.$request->email.'";</script>';
    }

    public function comingsoon()
    {
        $comingsoon = DB::select('select * from comingsoon');
        return view('comingsoon', ['comingsoon'=>$comingsoon]);
    }

    public function comingsoontitle($sort)
    {
        if($sort == 'ascend'){
            $order = 'ORDER by title ASC';
        } else if ($sort == 'descend'){
            $order = 'ORDER by title DESC';
        } else {
            $order = NULL;
        }
        if($order != NULL ){
            $comingsoon = DB::select('select * from comingsoon '.$order);
        } else {
            $comingsoon = DB::select('select * from comingsoon $order');
        }
        return view('comingsoon', ['comingsoon'=>$comingsoon]);
    }

    public function comingsoonfilter($filter)
    {
        if($filter == 'R'){
            $where = 'WHERE rating = "R" ORDER BY title ASC';
        } else if ($filter == 'PG13'){
            $where = 'WHERE rating = "PG-13" ORDER BY title ASC';
        } else if ($filter == 'G'){
                $where = 'WHERE rating = "G" ORDER BY title ASC';
        } else {
            $where = NULL;
        }
        if($where != NULL ){
            $comingsoon = DB::select('select * from comingsoon '.$where);
        } else {
            $comingsoon = DB::select('select * from comingsoon');
        }
        return view('comingsoon', ['comingsoon'=>$comingsoon]);
    }

    public function profile($email){
        $info = DB::table('profile')->where('email', $email)->first();
        return view('profile', ['info'=>$info]);
    }

    public function profilecreate(Request $request){
        // untuk validasi form
        $this->validate($request, [
            'age' => 'required',
            'dob' => 'required',
            'address' => 'required',
            'picture' => 'required',
            'email' => 'required'
        ]);
        
        $poste = 0;
        if($request->picture != NULL){
            $poste = 1;
            $file = $request->file('picture');
            $folder = 'uploads/profile';
            $name = $file->getClientOriginalName();
            $file->move($folder,$file->getClientOriginalName());
        }

        DB::table('profile')->insert([
            'age' => $request->age,
            'dob' => $request->dob,
            'address' => $request->address,
            'email' => $request->email,
            'picture' => $name
        ]);
        $link = $request->email;
        return redirect('/profile/'.$link);
    }

    public function profileupdateform($email){
        $info = DB::table('profile')->where('email', $email)->first();
        return view('form', ['info'=>$info]);
    }

    public function profileupdate(Request $request){
        // untuk validasi form
        $this->validate($request, [
            'email' => 'required',
            'name' => 'required',
            'address' => 'required',
            'age' => 'required',
            'dob' => 'required'
        ]);

        $poste = 0;
        if($request->poster != NULL){
            $poste = 1;
            $file = $request->file('picture');
            $folder = 'uploads/picture';
            $name = $file->getClientOriginalName();
            $file->move($folder,$file->getClientOriginalName());
        }

        if($poste != 0){
            DB::table('profile')->where('email',$request->email)->update([
            'age' => $request->age,
            'dob' => $request->dob,
            'address' => $request->address,
            'picture' => $name
            ]);
        } else {
            DB::table('profile')->where('email',$request->email)->update([
            'age' => $request->age,
            'dob' => $request->dob,
            'address' => $request->address,
            ]);
        }
        DB::table('users')->where('email',$request->email)->update([
            'name' => $request->name
        ]);
        $link = $request->email;
        return redirect('/profile/'.$link);
    }

    public function history($email){
        $info = DB::table('history')->where('email', $email)->get();
        return view('history', ['info'=>$info]);
    }

    public function comingsoonsearch(request $request){
        $this->validate($request, [
            'search' => 'required'
        ]);
        $comingsoon = DB::select('select * from comingsoon where title LIKE "%'.$request->search.'%"');
        return view('comingsoon', ['comingsoon'=>$comingsoon]);
    }
}
