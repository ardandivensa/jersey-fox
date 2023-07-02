<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;

class DetailTransaction extends Component
{
    public $order;

    public function mount($id) {
        $pesanan = Order::find($id);

        if ($pesanan) {
            $this->order = $pesanan;
        }
    }
    public function render()
    {
        if(Auth::user()->is_admin == 1) {
            return view('livewire.detail-transaction', [
                'orders' => $this->order,
                'order_details' => OrderDetail::where('order_id', $this->order->id)->get(),
            ]);
        } else {
            abort(404);
        }
    }
}