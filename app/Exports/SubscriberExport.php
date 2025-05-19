<?php

namespace App\Exports;

use App\Models\Subscriber;
use Maatwebsite\Excel\Concerns\FromCollection;

class SubscriberExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Subscriber::all();
    }

        public function map($subscriber): array
    {
        return [
            $subscriber->id,
            $subscriber->email,
  
             $subscriber->created_at->format('Y-m-d H:i'),
 
        ];
    }

      public function headings(): array
    {

        return [
            'Id',
            'Email',
            'Created At',
        ];
    }

}
