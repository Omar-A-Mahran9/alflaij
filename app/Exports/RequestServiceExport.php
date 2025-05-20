<?php

namespace App\Exports;

use App\Models\RequestService;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class RequestServiceExport implements FromCollection, WithMapping, WithHeadings, WithStyles
{
    public function collection()
    {
        return RequestService::with('service')->get();
    }

    public function map($service): array
    {
        return [
            $service->id,
            $service->phone,
            $service->car_model,
            $service->car_brand,
            $service->meter_reading,
            optional($service->service)->name,
            // $service->created_at->format('Y-m-d H:i'),
        ];
    }

 public function headings(): array
{
    return [
        __('order_id'),
        __('phone'),
        __('model'),
        __('brand'),
        __('meter_reading'),
        __('service_name'),
        // __('exports.created_at'),
    ];
}
 public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]], // Make first row (headings) bold
        ];
    }
}
