<?php

namespace App\Exporter;

use App\Exporter\PDF\PDFExporter;

class ExporterFactory
{
    public function create(): ExporterInterface
    {
        return new PDFExporter();
    }
}