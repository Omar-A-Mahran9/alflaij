<?php

namespace App\Exports;

use App\Models\Order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrdersExport implements FromCollection, WithMapping, WithHeadings
{
    public function collection()
    {
        return Order::with(['employee', 'city', 'car'])->get(); // eager loading
    }

    public function map($order): array
    {
        return [
            $order->id,
            optional($order->employee)->name ?? '-',
            $order->city->name,
            $order->car->price,
            $order->name,
            $order->phone,
            $order->email,
             $order->created_at->format('Y-m-d H:i'),
            $order->car->name,

        ];
    }

    public function headings(): array
    {
        return [
            'Order ID',
            'Employee Name',
            'City',
            'Price',
            'Customer Name',
            'Phone',
            'Email',
            'Created At',
            'Car',
         ];
    }
}
