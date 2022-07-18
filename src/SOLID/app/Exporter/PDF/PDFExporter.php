<?php

namespace App\Exporter\PDF;

use App\Exporter\ExporterInterface;

class PDFExporter implements ExporterInterface
{

    public function export(string $path): string
    {
        return 'You exported PDF file.';
    }
}