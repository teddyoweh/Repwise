<?php

declare(strict_types=1);

namespace Repwise\Admin\Filament\Resources\OpportunityResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use Repwise\Admin\Filament\Resources\OpportunityResource;

final class CreateOpportunity extends CreateRecord
{
    protected static string $resource = OpportunityResource::class;
}
