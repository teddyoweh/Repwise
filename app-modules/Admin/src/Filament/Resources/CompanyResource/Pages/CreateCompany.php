<?php

declare(strict_types=1);

namespace Repwise\Admin\Filament\Resources\CompanyResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Repwise\Admin\Filament\Resources\CompanyResource;

final class CreateCompany extends CreateRecord
{
    protected static string $resource = CompanyResource::class;
}
