<?php

namespace App\Exports;

use App\Models\Subscriber;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class SubscriberExport implements FromCollection, WithMapping, WithHeadings, WithStyles
{
    /**
     * Export all subscribers
     */
    public function collection()
    {
        return Subscriber::all();
    }

    /**
     * Map each row
     */
    public function map($subscriber): array
    {
        return [
            $subscriber->id,
            $subscriber->email,
            $subscriber->created_at->format('Y-m-d H:i'),
        ];
    }

    /**
     * Set headings
     */
    public function headings(): array
    {
        return [
            __('Id'),
            __('Email'),
            __('Created At'),
        ];
    }

    /**
     * Style headings (make bold)
     */
    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]], // Make first row bold
        ];
    }
}
