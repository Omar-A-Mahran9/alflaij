<?php

namespace App\Exports;

use App\Models\RequestService;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class RequestServiceExport implements FromCollection, WithMapping, WithHeadings
{
    public function collection()
    {
        return RequestService::with(['service', 'city', 'status'])->get();
    }

    public function map($service): array
    {
        return [
            $service->id,
            $service->name,
            $service->phone,
            optional($service->city)->name,
            optional($service->service)->name,
            $service->car_model,
            $service->car_brand,
            $service->meter_reading,
            optional($service->status)->name,
            $service->created_at->format('Y-m-d H:i'),
            $service->order_id,
        ];
    }

    public function headings(): array
    {
        return [
            'ID',
            'Customer Name',
            'Phone',
            'City',
            'Service',
            'Car Model',
            'Car Brand',
            'Meter Reading',
            'Status',
            'Created At',
            'Order ID',
        ];
    }
}
