<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\Book;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Resources\CheckoutsResource;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return CheckoutsResource::collection(Checkout::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //user_id, book_id, checked_out
        $book = Checkout::create([
            'user_id' => $request->user()->id,
            'book_id' => $request->book_id,
            'checked_out' => Carbon::now()->toDateTimeString(),
            'checked_in' => null
        ]);

        return new CheckoutsResource($book);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $faker = \Faker\Factory::create(1);

        $book = Checkout::create([
            'user_id' => User::all()->random()->id,
            'book_id' => Book::all()->random()->id,
            'checked_out' => $this->faker->dateTime($max = '-1 month', $timezone = null),
            'checked_in' => $this->faker->dateTimeBetween($startDate = '-1 month', $endDate = 'now', $timezone = null)
        ]);

        return new CheckoutsResource($book);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function show(Checkout $checkout)
    {
        return new CheckoutsResource($checkout);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function edit(Checkout $checkout)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $checkout = Checkout::find($request->id); //->where('user_id', $request->user()->id)->get();

        if ($checkout->user_id == $request->user()->id) {
            $checkout->checked_in = Carbon::now()->toDateTimeString();

            $checkout->save();
            return 'Checked in successfully!';
        } else {
            return 'Was not able to check in: Wrong user.';
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Checkout  $checkout
     * @return \Illuminate\Http\Response
     */
    public function destroy(Checkout $checkout)
    {
        //
    }
}
