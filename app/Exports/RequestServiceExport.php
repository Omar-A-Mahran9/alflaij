<?php

namespace App\Exports;

use App\Models\RequestService;
use Maatwebsite\Excel\Concerns\FromCollection;

class RequestServiceExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
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
            $service->car_brand ,
            $service->Meter_reading,


            $service->service->name,
            
             $service->created_at->format('Y-m-d H:i'),
 
        ];
    }
        public function headings(): array
    {
        return [
            'Order ID',
            'Customer Name',
            'Model',
            'Brand',
            'Meter Reading',
            'Service Name',
             'Created At',
         ];
    }

}
